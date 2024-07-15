
## LaravelShoppingcart
[![codecov](https://codecov.io/gh/anayarojo/laravel-shopping-cart/branch/master/graph/badge.svg)](https://codecov.io/gh/anayarojo/laravel-shopping-cart)
[![Latest Stable Version](https://poser.pugx.org/anayarojo/shoppingcart/v/stable)](https://packagist.org/packages/anayarojo/shoppingcart)
[![Latest Unstable Version](https://poser.pugx.org/anayarojo/shoppingcart/v/unstable)](https://packagist.org/packages/anayarojo/shoppingcart)
[![License](https://poser.pugx.org/anayarojo/shoppingcart/license)](https://packagist.org/packages/anayarojo/shoppingcart)

Esta es una copia de [LaravelShoppingcart de bumbummen99](https://github.com/bumbummen99/LaravelShoppingcart), extendida con características menores compatibles con Laravel 11+. Un ejemplo de integración se puede [encontrar aquí](https://github.com/bumbummen99/LaravelShoppingcartDemo).

## Instalación

Instala el [paquete](https://packagist.org/packages/anayarojo/shoppingcart) a través de [Composer](http://getcomposer.org/). 

Ejecuta el comando Composer `require` desde la Terminal::

    composer require anayarojo/shoppingcart

Ahora estás listo para comenzar a usar el Laravel Shopping Cart en tu aplicación.

**A partir de la versión 2 de este paquete, es posible utilizar la inyección de dependencias para inyectar una instancia de la clase Cart en tu controlador u otra clase.**

Definitivamente deberías publicar el archivo de `config` y echarle un vistazo..

    php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"

Esto te proporcionará un archivo de configuración `cart.php` en el cual puedes realizar cambios en el comportamiento del paquete."

## Actualizaciones

As of version **4.2.0** this package does, when being used with PostgreSQL, encode the cart content to base64 before storing into database due to an [issue with saving values including zero bytes](https://github.com/bumbummen99/LaravelShoppingcart/pull/167). Please consider clearing your cart table in case you are upgrading using PostgreSQL from a version **<4.2.0**.

A partir de la versión **4.2.0**, este paquete, al ser utilizado con PostgreSQL, codifica el contenido del carrito a base64 antes de almacenarlo en la base de datos debido a un [problema al guardar valores que incluyen bytes nulos](https://github.com/bumbummen99/LaravelShoppingcart/pull/167). Por favor, considera limpiar la tabla de tu carrito en caso de que estés realizando una actualización utilizando PostgreSQL desde una versión **<4.2.0**.

## Tabla de Contenidos
Consulta uno de los siguientes temas para obtener más información sobre LaravelShoppingcart

* [Nota importante](#nota-importante)
* [Uso](#uso)
* [Colecciones](#colecciones)
* [Instancias](#instancias)
* [Modelos](#modelos)
* [Base de Datos](#base-de-datos)
* [Calculadoras](#calculadoras)
* [Excepciones](#excepciones)
* [Eventos](#eventos)
* [Ejemplo](#ejemplo)
* [Colaboradores](#colaboradores)

## Nota importante

Como todos los carritos de compras que calculan precios incluyendo impuestos y descuentos, este módulo también podría verse afectado por el "problema de redondeo de totales" ([*](https://stackoverflow.com/questions/13529580/magento-tax-rounding-issue)) debido a la precisión decimal utilizada para los precios y para los resultados. Con el fin de evitar (o al menos minimizar) este problema, en el paquete Laravel shoppingcart los totales se calculan utilizando el método **"por fila"** y se devuelven ya redondeados en función del formato numérico establecido por defecto en el archivo de configuración (cart.php). Debido a esto, **DESACONSEJAMOS ESTABLECER ALTA PRECISIÓN COMO VALOR POR DEFECTO Y FORMATEAR EL RESULTADO DE SALIDA UTILIZANDO MENOS DECIMALES**. Hacer esto puede llevar al problema de redondeo.

El precio base (precio del producto) se deja sin redondear.

## Uso

El carrito de compras te proporciona los siguientes métodos para usar:

### Cart::add()

Agregar un artículo al carrito es realmente simple, solo usas el método `add()`, el cual acepta una variedad de parámetros.

En su forma más básica, puedes especificar el id, nombre, cantidad, precio y peso del producto que deseas agregar al carrito.

```php
Cart::add('293ad', 'Product 1', 1, 9.99, 550);
```

Como un quinto parámetro opcional, puedes pasarle opciones, de modo que puedas agregar múltiples elementos con el mismo id, pero con (por ejemplo) un tamaño diferente.

```php
Cart::add('293ad', 'Product 1', 1, 9.99, 550, ['size' => 'large']);
```

**El método `add()` devolverá una instancia de CartItem del elemento que acabas de agregar al carrito.**

¿Quizás prefieras agregar el artículo usando un array? Siempre y cuando el array contenga las claves requeridas, puedes pasarlo al método. La clave de opciones es opcional.

```php
Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']]);
```

Novedad en la versión 2 del paquete es la posibilidad de trabajar con la interfaz [Buyable](#buyable). La forma en que esto funciona es que tienes un modelo que implementa la interfaz [Buyable](#buyable), lo que te obliga a implementar algunos métodos para que el paquete sepa cómo obtener el id, nombre y precio de tu modelo. De esta manera, simplemente puedes pasar al método `add()` un modelo y la cantidad, y automáticamente lo agregará al carrito.

**Como bono adicional, asociará automáticamente el modelo con el CartItem.**

```php
Cart::add($product, 1, ['size' => 'large']);
```
As an optional third parameter you can add options.
```php
Cart::add($product, 1, ['size' => 'large']);
```

Finalmente, también puedes agregar varios elementos al carrito a la vez.
Simplemente puedes pasar al método `add()` un array de arrays, o un array de Buyables y serán agregados al carrito.

**Cuando agregas varios elementos al carrito, el método `add()` devolverá un array de CartItems.**

```php
Cart::add([
  ['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 10.00, 'weight' => 550],
  ['id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00, 'weight' => 550, 'options' => ['size' => 'large']]
]);

Cart::add([$product1, $product2]);

```

### Cart::update()

Para actualizar un elemento en el carrito, primero necesitarás el rowId del elemento.
Luego puedes usar el método `update()` para actualizarlo.

Si simplemente deseas actualizar la cantidad, pasarás al método de actualización el rowId y la nueva cantidad:

```php
$rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

Cart::update($rowId, 2); // Se actualizará la cantidad
```

Si deseas actualizar las opciones de un artículo dentro del carrito,

```php
$rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

Cart::update($rowId, ['options'  => ['size' => 'small']]); // Se actualizará la opción de tamaño con un nuevo valor
```

Si deseas actualizar más atributos del artículo, puedes pasar al método de actualización un array o un `Buyable` como segundo parámetro. De esta manera, puedes actualizar toda la información del artículo con el rowId proporcionado.

```php
Cart::update($rowId, ['name' => 'Product 1']); // Se actualizará el nombre

Cart::update($rowId, $product); // Se actualizará el id, el nombre y el precio

```

### Cart::remove()

Para eliminar un elemento del carrito, nuevamente necesitarás el rowId. Este rowId lo pasas simplemente al método `remove()` y eliminará el elemento del carrito.

```php
$rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

Cart::remove($rowId);
```

### Cart::get()

Si deseas obtener un artículo del carrito utilizando su rowId, simplemente llama al método `get()` en el carrito y pásale el rowId.

```php
$rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

Cart::get($rowId);
```

### Cart::content()

Por supuesto, también querrás obtener el contenido del carrito. Aquí es donde utilizarás el método `content`. Este método devolverá una Colección de CartItems que puedes iterar y mostrar el contenido a tus clientes.

```php
Cart::content();
```

Este método devolverá el contenido de la instancia actual del carrito. Si deseas el contenido de otra instancia, simplemente encadena las llamadas.

```php
Cart::instance('wishlist')->content();
```

### Cart::destroy()

Si deseas eliminar completamente el contenido de un carrito, puedes llamar al método `destroy` en el carrito. Esto eliminará todos los CartItems del carrito para la instancia actual del carrito.

```php
Cart::destroy();
```

### Cart::weight()

El método `weight()` se puede utilizar para obtener el peso total de todos los elementos en el carrito, dado su peso y cantidad.

```php
Cart::weight();
```

El método formateará automáticamente el resultado, el cual puedes ajustar usando los tres parámetros opcionales.

```php
Cart::weight($decimals, $decimalSeperator, $thousandSeperator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

**Si no estás utilizando el Facade, sino que utilizas la inyección de dependencias en tu (por ejemplo) Controlador, también puedes simplemente obtener la propiedad total `$cart->weight`**

### Cart::total()

El método `total()` se puede utilizar para obtener el total calculado de todos los elementos en el carrito, dado su precio y cantidad.

```php
Cart::total();
```

El método formateará automáticamente el resultado, el cual puedes ajustar usando los tres parámetros opcionales.

```php
Cart::total($decimals, $decimalSeparator, $thousandSeparator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

**Si no estás utilizando el Facade, sino que utilizas la inyección de dependencias en tu (por ejemplo) Controlador, también puedes simplemente obtener la propiedad total `$cart->total`**

### Cart::tax()

El método `tax()` se puede utilizar para obtener el monto calculado de impuestos para todos los elementos en el carrito, dado su precio y cantidad.

```php
Cart::tax();
```

El método formateará automáticamente el resultado, el cual puedes ajustar usando los tres parámetros opcionales.

```php
Cart::tax($decimals, $decimalSeparator, $thousandSeparator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

**Si no estás utilizando el Facade, sino que utilizas la inyección de dependencias en tu (por ejemplo) Controlador, también puedes simplemente obtener la propiedad de impuestos `$cart->tax`**

### Cart::subtotal()

El método `subtotal()` se puede utilizar para obtener el total de todos los elementos en el carrito, menos el monto total de impuestos.

```php
Cart::subtotal();
```

El método formateará automáticamente el resultado, el cual puedes ajustar usando los tres parámetros opcionales.

```php
Cart::subtotal($decimals, $decimalSeparator, $thousandSeparator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

**Si no estás utilizando el Facade, sino que usas inyección de dependencias en tu (por ejemplo) Controlador, también puedes simplemente obtener la propiedad subtotal `$cart->subtotal`**

### Cart::discount()

El método `discount()` se puede utilizar para obtener el descuento total de todos los elementos en el carrito.

```php
Cart::discount();
```

El método formateará automáticamente el resultado, el cual puedes ajustar usando los tres parámetros opcionales.

```php
Cart::discount($decimals, $decimalSeparator, $thousandSeparator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

**Si no estás utilizando el Facade, sino que usas la inyección de dependencias en tu (por ejemplo) Controlador, también puedes simplemente obtener la propiedad de descuento `$cart->discount`**

### Cart::initial()

El método `initial()` se puede utilizar para obtener el precio total de todos los elementos en el carrito antes de aplicar descuentos e impuestos.

Podría ser obsoleto en el futuro. **Cuando se redondee, podría verse afectado por el problema de redondeo**, úsalo con cuidado o utiliza [Cart::priceTotal()](#Cart::priceTotal()).

```php
Cart::initial();
```

El método formateará automáticamente el resultado, el cual puedes ajustar utilizando los tres parámetros opcionales.

```php
Cart::initial($decimals, $decimalSeparator, $thousandSeparator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

### Cart::priceTotal()

El método `priceTotal()` se puede utilizar para obtener el precio total de todos los elementos en el carrito antes de aplicar descuentos e impuestos.

```php
Cart::priceTotal();
```

El método devuelve el resultado redondeado basado en el formato numérico predeterminado, pero puedes ajustarlo utilizando los tres parámetros opcionales.

```php
Cart::priceTotal($decimals, $decimalSeparator, $thousandSeparator);
```

Puedes establecer el formato numérico predeterminado en el archivo de configuración.

**Si no estás utilizando el Facade, sino que usas inyección de dependencias en tu (por ejemplo) Controlador, también puedes simplemente obtener la propiedad subtotal `$cart->initial`**

### Cart::count()

Si deseas saber cuántos artículos hay en tu carrito, puedes usar el método `count()`. Este método devolverá el número total de artículos en el carrito. Entonces, si has agregado 2 libros y 1 camisa, devolverá 3 artículos.

```php
Cart::count();
$cart->count();
```

### Cart::search()

Para encontrar un elemento en el carrito, puedes usar el método `search()`.

**Este método fue cambiado en la versión 2**

Detrás de escena, el método simplemente utiliza el método de filtro de la clase Laravel Collection. Esto significa que debes pasarle un Closure en el cual especificarás tus términos de búsqueda.

Si, por ejemplo, deseas encontrar todos los elementos con un id de 1:

```php
$cart->search(function ($cartItem, $rowId) {
	return $cartItem->id === 1;
});
```
Como puedes ver, el Closure recibirá dos parámetros. El primero es el CartItem para realizar la verificación. El segundo parámetro es el rowId de este CartItem.

**El método devolverá una Colección que contiene todos los CartItems que se encontraron**

Esta forma de búsqueda te brinda un control total sobre el proceso de búsqueda y te da la capacidad de crear búsquedas muy precisas y específicas.

### Cart::setTax($rowId, $taxRate)

Puedes usar el método `setTax()` para cambiar la tasa impositiva que se aplica al CartItem. Esto sobrescribirá el valor establecido en el archivo de configuración.

```php
Cart::setTax($rowId, 21);
$cart->setTax($rowId, 21);
```

### Cart::setGlobalTax($taxRate)

Puedes usar el método `setGlobalTax()` para cambiar la tasa impositiva para todos los elementos en el carrito. Los nuevos elementos también recibirán el impuesto global establecido.

```php
Cart::setGlobalTax(21);
$cart->setGlobalTax(21);
```

### Cart::setGlobalDiscount($discountRate)

Puedes usar el método `setGlobalDiscount()` para cambiar la tasa de descuento para todos los elementos en el carrito. Los nuevos elementos también recibirán el descuento establecido.

```php
Cart::setGlobalDiscount(50);
$cart->setGlobalDiscount(50);
```

### Cart::setDiscount($rowId, $taxRate)

Puedes usar el método `setDiscount()` para cambiar la tasa de descuento que se aplica a un CartItem. Ten en cuenta que este valor se cambiará si estableces el descuento global para el Carrito posteriormente.

```php
Cart::setDiscount($rowId, 21);
$cart->setDiscount($rowId, 21);
```

### Buyable

Para la conveniencia de agregar rápidamente elementos al carrito y su asociación automática, tu modelo debe implementar la interfaz `Buyable`. Puedes usar el trait `CanBeBought` para implementar los métodos requeridos, pero ten en cuenta que estos utilizarán campos predefinidos en tu modelo para los valores requeridos.

```php
<?php
namespace App\Models;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Buyable {
    use Gloudemans\Shoppingcart\CanBeBought;
}
```

Si el trait no funciona en el modelo o deseas mapear los campos manualmente, el modelo debe implementar los métodos de la interfaz `Buyable`. Para hacerlo, debe implementar dichas funciones:

```php
    public function getBuyableIdentifier(){
        return $this->id;
    }
    public function getBuyableDescription(){
        return $this->name;
    }
    public function getBuyablePrice(){
        return $this->price;
    }
    public function getBuyableWeight(){
        return $this->weight;
    }
```

Ejemplo:

```php
<?php
namespace App\Models;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Buyable {
    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->price;
    }
    public function getBuyableWeight($options = null) {
        return $this->weight;
    }
}
```

## Collections

En múltiples instancias, el Carrito te devolverá una Colección. Esta es simplemente una Colección de Laravel, por lo que todos los métodos que puedes llamar en una Colección de Laravel también están disponibles en el resultado.

Como ejemplo, puedes obtener rápidamente el número de productos únicos en un carrito:

```php
Cart::content()->count();
```

O puedes agrupar el contenido por el id de los productos:

```php
Cart::content()->groupBy('id');
```

## Instancias

El paquete soporta múltiples instancias del carrito. La forma en que funciona es la siguiente:

Puedes establecer la instancia actual del carrito llamando a `Cart::instance('nuevaInstancia')`. A partir de este momento, la instancia activa del carrito será nuevaInstancia, por lo que cuando agregues, elimines o obtengas el contenido del carrito, estarás trabajando con la instancia `nuevaInstancia` del carrito.
Si deseas cambiar de instancia, simplemente llama nuevamente a `Cart::instance('otraInstancia')`, y estarás trabajando con la `otraInstancia` nuevamente.

Así que un pequeño ejemplo:

```php
Cart::instance('shopping')->add('192ao12', 'Product 1', 1, 9.99, 550);

// Get the content of the 'shopping' cart
Cart::content();

Cart::instance('wishlist')->add('sdjk922', 'Product 2', 1, 19.95, 550, ['size' => 'medium']);

// Get the content of the 'wishlist' cart
Cart::content();

// If you want to get the content of the 'shopping' cart again
Cart::instance('shopping')->content();

// And the count of the 'wishlist' cart again
Cart::instance('wishlist')->count();
```

También puedes usar el contrato `InstanceIdentifier` para extender un Modelo deseado y asignar/crear una instancia de Carrito para él. Esto también permite establecer directamente el descuento global.
```
<?php

namespace App;
...
use Illuminate\Foundation\Auth\User as Authenticatable;
use Gloudemans\Shoppingcart\Contracts\InstanceIdentifier;

class User extends Authenticatable implements InstanceIdentifier
{
	...

	/**
     * Get the unique identifier to load the Cart from
     *
     * @return int|string
     */
    public function getInstanceIdentifier($options = null)
    {
        return $this->email;
    }

    /**
     * Get the unique identifier to load the Cart from
     *
     * @return int|string
     */
    public function getInstanceGlobalDiscount($options = null)
    {
        return $this->discountRate ?: 0;
    }
}

// Inside Controller
$user = \Auth::user();
$cart = Cart::instance($user);

```

**N.B. Ten en cuenta que el carrito permanece en la última instancia establecida durante todo el tiempo que no establezcas una diferente durante la ejecución del script.**

**N.B.2 La instancia de carrito predeterminada se llama `default`, por lo que cuando no estás usando instancias, `Cart::content();` es lo mismo que `Cart::instance('default')->content()`.**

## Modelos

Porque puede ser muy conveniente poder acceder directamente a un modelo desde un CartItem, es posible asociar un modelo con los elementos en el carrito. Digamos que tienes un modelo `Product` en tu aplicación. Con el método `associate()`, puedes decirle al carrito que un elemento en el carrito está asociado al modelo `Product`.

De esta manera, ¡puedes acceder a tu modelo directamente desde el `CartItem`!

El modelo se puede acceder a través de la propiedad `model` en el CartItem.

**Si tu modelo implementa la interfaz `Buyable` y utilizaste tu modelo para agregar el elemento al carrito, se asociará automáticamente.**

Aquí tienes un ejemplo:

```php

// Primero agregaremos el elemento al carrito.
$cartItem = Cart::add('293ad', 'Product 1', 1, 9.99, 550, ['size' => 'large']);

// A continuación, asociamos un modelo con el elemento.
Cart::associate($cartItem->rowId, 'Product');

// ¡O aún más fácil, llama al método associate en el CartItem!
$cartItem->associate('Product');

// Incluso puedes hacerlo en una sola línea
Cart::add('293ad', 'Product 1', 1, 9.99, 550, ['size' => 'large'])->associate('Product');

// Ahora, al iterar sobre el contenido del carrito, puedes acceder al modelo.
foreach(Cart::content() as $row) {
	echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
}
```
## Base de Datos

- [Configuración](#configuración)
- [Almacenamiento del carrito](#almacenamiento-del-carrito)
- [Restauración del carrito](#restauración-del-carrito)

### Configuración
Para guardar el carrito en la base de datos para poder recuperarlo más tarde, el paquete necesita saber qué conexión de base de datos usar y cuál es el nombre de la tabla.
Por defecto, el paquete utilizará la conexión de base de datos predeterminada y usará una tabla llamada `shoppingcart`. Puedes cambiar eso en la configuración.

    php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="migrations"
    
Esto colocará un archivo de migración de la tabla `shoppingcart` en el directorio `database/migrations`. Ahora todo lo que tienes que hacer es ejecutar `php artisan migrate` para migrar tu base de datos.

### Almacenamiento del carrito 
Para almacenar tu instancia de carrito en la base de datos, debes llamar al método `store($identifier)`. Donde `$identifier` es una clave aleatoria, por ejemplo, el id o nombre de usuario del usuario.

    Cart::store('username');
    
    // Para almacenar una instancia de carrito llamada 'wishlist'
    Cart::instance('wishlist')->store('username');

### Restauración del carrito
Si deseas recuperar el carrito de la base de datos y restaurarlo, todo lo que tienes que hacer es llamar al método `restore($identifier)` donde `$identifier` es la clave que especificaste para el método store.

    Cart::restore('username');
    
    // Para restaurar una instancia de carrito llamada 'wishlist'
    Cart::instance('wishlist')->restore('username');

### Fusión del carrito
Si deseas fusionar el carrito con otro de la base de datos, todo lo que tienes que hacer es llamar al método `merge($identifier)` donde `$identifier` es la clave que especificaste para el método `store`. También puedes definir si deseas mantener los descuentos y las tasas de impuestos de los artículos y si deseas enviar eventos "cart.added".

    // Fusionar el contenido de 'savedcart' en 'username'.
    Cart::instance('username')->merge('savedcart', $keepDiscount, $keepTaxrate, $dispatchAdd, 'savedcartinstance');

### Borrado del carrito
Si deseas borrar el carrito de la base de datos, todo lo que tienes que hacer es llamar al método `erase($identifier)` donde `$identifier` es la clave que especificaste para el método `store`.

    Cart::erase('username');
    
    // Para borrar un carrito cambiando a una instancia llamada 'wishlist'
    Cart::instance('wishlist')->erase('username');

## Calculadoras
La lógica de cálculo para el paquete está implementada y definida en clases `Calculator`. Estas implementan el contrato `Gloudemans\Shoppingcart\Contracts\Calculator` y determinan cómo se calculan y redondean los precios. Las calculadoras se pueden configurar en el archivo de configuración. Esta es la calculadora por defecto:

```php
<?php

namespace Gloudemans\Shoppingcart\Calculation;

use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Contracts\Calculator;

class DefaultCalculator implements Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem)
    {
        $decimals = config('cart.format.decimals', 2);

        switch ($attribute) {
            case 'discount':
                return $cartItem->price * ($cartItem->getDiscountRate() / 100);
            case 'tax':
                return round($cartItem->priceTarget * ($cartItem->taxRate / 100), $decimals);
            case 'priceTax':
                return round($cartItem->priceTarget + $cartItem->tax, $decimals);
            case 'discountTotal':
                return round($cartItem->discount * $cartItem->qty, $decimals);
            case 'priceTotal':
                return round($cartItem->price * $cartItem->qty, $decimals);
            case 'subtotal':
                return max(round($cartItem->priceTotal - $cartItem->discountTotal, $decimals), 0);
            case 'priceTarget':
                return round(($cartItem->priceTotal - $cartItem->discountTotal) / $cartItem->qty, $decimals);
            case 'taxTotal':
                return round($cartItem->subtotal * ($cartItem->taxRate / 100), $decimals);
            case 'total':
                return round($cartItem->subtotal + $cartItem->taxTotal, $decimals);
            default:
                return;
        }
    }
}

```

## Excepciones
El paquete Cart lanzará excepciones si algo sale mal. De esta manera, es más fácil depurar tu código utilizando el paquete Cart o manejar el error según el tipo de excepciones. El paquete Cart puede lanzar las siguientes excepciones:

| Excepción                    | Razón                                                                                             |
| ---------------------------- | ------------------------------------------------------------------------------------------------- |
| *CartAlreadyStoredException* | Cuando se intenta almacenar un carrito que ya fue almacenado usando el identificador especificado |
| *InvalidRowIDException*      | Cuando el rowId que se pasó no existe en la instancia actual del carrito                          |
| *UnknownModelException*      | Cuando intentas asociar un modelo que no existe a un CartItem.                                    |

## Eventos

The cart also has events build in. There are five events available for you to listen for.

| Evento         | 	Se activa                                             | Parámetro                               |
| -------------- | ------------------------------------------------------ | --------------------------------------- |
| cart.adding    | Cuando se agrega un elemento al carrito.	              | El `CartItem` que se está agregando.    |
| cart.updating  | Cuando se actualiza un elemento en el carrito.         | El `CartItem` que se está actualizando. |
| cart.removing  | Cuando se elimina un elemento del carrito.             | El `CartItem` que se está eliminando.   |
| cart.added     | Cuando se ha agregado un elemento al carrito.          | El `CartItem` que se agregó.            |
| cart.updated   | Cuando se ha actualizado un elemento en el carrito.    | El `CartItem` que se actualizó.         |
| cart.removed   | Cuando se ha eliminado un elemento del carrito.        | El `CartItem` que se eliminó.           |
| cart.merged    | Cuando se fusiona el contenido de un carrito.          | -                                       |
| cart.stored    | Cuando se ha almacenado el contenido de un carrito.    | -                                       |
| cart.restored  | Cuando se ha restaurado el contenido de un carrito.    | -                                       |
| cart.erased    | Cuando se ha borrado el contenido de un carrito.       | -                                       |

## Ejemplo

A continuación, te muestro un pequeño ejemplo de cómo listar el contenido del carrito en una tabla:

```php

// Agrega algunos elementos en tu controlador.
Cart::add('192ao12', 'Product 1', 1, 9.99);
Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);

// Muestra el contenido en una vista.
<table>
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
           	<th>Price</th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>

   	<tbody>

   		<?php foreach(Cart::content() as $row) :?>

       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>
               		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
           		</td>
           		<td><input type="text" value="<?php echo $row->qty; ?>"></td>
           		<td>$<?php echo $row->price; ?></td>
           		<td>$<?php echo $row->total; ?></td>
       		</tr>

	   	<?php endforeach;?>

   	</tbody>
   	
   	<tfoot>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Subtotal</td>
   			<td><?php echo Cart::subtotal(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Tax</td>
   			<td><?php echo Cart::tax(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Total</td>
   			<td><?php echo Cart::total(); ?></td>
   		</tr>
   	</tfoot>
</table>
```

## Contribuidores
<!-- readme: contributors -start -->
<table>
<tr>
    <td align="center">
        <a href="https://github.com/bumbummen99">
            <img src="https://avatars.githubusercontent.com/u/4533331?v=4" width="100;" alt="bumbummen99"/>
            <br />
            <sub><b>Patrick</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/Crinsane">
            <img src="https://avatars.githubusercontent.com/u/1297781?v=4" width="100;" alt="Crinsane"/>
            <br />
            <sub><b>Rob Gloudemans</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/Norris1z">
            <img src="https://avatars.githubusercontent.com/u/18237132?v=4" width="100;" alt="Norris1z"/>
            <br />
            <sub><b>Norris Oduro</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/anayarojo">
            <img src="https://avatars.githubusercontent.com/u/6903495?v=4" width="100;" alt="anayarojo"/>
            <br />
            <sub><b>Raul Anaya Rojo</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/olegbespalov">
            <img src="https://avatars.githubusercontent.com/u/5425600?v=4" width="100;" alt="olegbespalov"/>
            <br />
            <sub><b>Oleg Bespalov</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/cwprogger">
            <img src="https://avatars.githubusercontent.com/u/11742147?v=4" width="100;" alt="cwprogger"/>
            <br />
            <sub><b>Andrew Savchenko</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/ChrisThompsonTLDR">
            <img src="https://avatars.githubusercontent.com/u/348801?v=4" width="100;" alt="ChrisThompsonTLDR"/>
            <br />
            <sub><b>Chris Thompson</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/Jam-Iko">
            <img src="https://avatars.githubusercontent.com/u/44161368?v=4" width="100;" alt="Jam-Iko"/>
            <br />
            <sub><b>Jam-Iko</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/mattusik">
            <img src="https://avatars.githubusercontent.com/u/1252223?v=4" width="100;" alt="mattusik"/>
            <br />
            <sub><b>Matus Rohal</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/rakibabu">
            <img src="https://avatars.githubusercontent.com/u/14089150?v=4" width="100;" alt="rakibabu"/>
            <br />
            <sub><b>Rakhal Imming</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/tiotobing">
            <img src="https://avatars.githubusercontent.com/u/33707075?v=4" width="100;" alt="tiotobing"/>
            <br />
            <sub><b>Tiotobing</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/Sartoric">
            <img src="https://avatars.githubusercontent.com/u/6607379?v=4" width="100;" alt="Sartoric"/>
            <br />
            <sub><b>Sartoric</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/trippo">
            <img src="https://avatars.githubusercontent.com/u/497169?v=4" width="100;" alt="trippo"/>
            <br />
            <sub><b>Alberto Peripolli</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/macbookandrew">
            <img src="https://avatars.githubusercontent.com/u/784333?v=4" width="100;" alt="macbookandrew"/>
            <br />
            <sub><b>Andrew Minion</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/dtwebuk">
            <img src="https://avatars.githubusercontent.com/u/6045378?v=4" width="100;" alt="dtwebuk"/>
            <br />
            <sub><b>Daniel Tomlinson</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/tkaw220">
            <img src="https://avatars.githubusercontent.com/u/694289?v=4" width="100;" alt="tkaw220"/>
            <br />
            <sub><b>Edwin Aw</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/manojo123">
            <img src="https://avatars.githubusercontent.com/u/20805943?v=4" width="100;" alt="manojo123"/>
            <br />
            <sub><b>Jorge Moura</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/jorgejavierleon">
            <img src="https://avatars.githubusercontent.com/u/7950376?v=4" width="100;" alt="jorgejavierleon"/>
            <br />
            <sub><b>Jorge Javier León</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/geisi">
            <img src="https://avatars.githubusercontent.com/u/10728579?v=4" width="100;" alt="geisi"/>
            <br />
            <sub><b>Tim Geisendörfer</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/adamgoose">
            <img src="https://avatars.githubusercontent.com/u/611068?v=4" width="100;" alt="adamgoose"/>
            <br />
            <sub><b>Adam Engebretson</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/andcl">
            <img src="https://avatars.githubusercontent.com/u/8470427?v=4" width="100;" alt="andcl"/>
            <br />
            <sub><b>Andrés</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/ganyicz">
            <img src="https://avatars.githubusercontent.com/u/3823354?v=4" width="100;" alt="ganyicz"/>
            <br />
            <sub><b>Filip Ganyicz</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/guysolamour">
            <img src="https://avatars.githubusercontent.com/u/22590722?v=4" width="100;" alt="guysolamour"/>
            <br />
            <sub><b>Guy-roland ASSALE</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/jackmcdade">
            <img src="https://avatars.githubusercontent.com/u/44739?v=4" width="100;" alt="jackmcdade"/>
            <br />
            <sub><b>Jack McDade</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/jeremyvaught">
            <img src="https://avatars.githubusercontent.com/u/302304?v=4" width="100;" alt="jeremyvaught"/>
            <br />
            <sub><b>Jeremy Vaught</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/jmarkese">
            <img src="https://avatars.githubusercontent.com/u/1827586?v=4" width="100;" alt="jmarkese"/>
            <br />
            <sub><b>John Markese</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/nexxai">
            <img src="https://avatars.githubusercontent.com/u/4316564?v=4" width="100;" alt="nexxai"/>
            <br />
            <sub><b>JT Smith</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/mrabbani">
            <img src="https://avatars.githubusercontent.com/u/4253979?v=4" width="100;" alt="mrabbani"/>
            <br />
            <sub><b>Mahbub Rabbani</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/mauriciv">
            <img src="https://avatars.githubusercontent.com/u/12043163?v=4" width="100;" alt="mauriciv"/>
            <br />
            <sub><b>Mauricio Vera</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/xpundel">
            <img src="https://avatars.githubusercontent.com/u/1384653?v=4" width="100;" alt="xpundel"/>
            <br />
            <sub><b>Mikhail Lisnyak</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/absemetov">
            <img src="https://avatars.githubusercontent.com/u/735924?v=4" width="100;" alt="absemetov"/>
            <br />
            <sub><b>Nadir Absemetov</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/nielsiano">
            <img src="https://avatars.githubusercontent.com/u/947684?v=4" width="100;" alt="nielsiano"/>
            <br />
            <sub><b>Niels Stampe</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/4ilo">
            <img src="https://avatars.githubusercontent.com/u/15938739?v=4" width="100;" alt="4ilo"/>
            <br />
            <sub><b>Olivier</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/PazkaL">
            <img src="https://avatars.githubusercontent.com/u/1322192?v=4" width="100;" alt="PazkaL"/>
            <br />
            <sub><b>Pascal Kousbroek</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/quintenbuis">
            <img src="https://avatars.githubusercontent.com/u/36452184?v=4" width="100;" alt="quintenbuis"/>
            <br />
            <sub><b>Quinten Buis</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/publiux">
            <img src="https://avatars.githubusercontent.com/u/2847188?v=4" width="100;" alt="publiux"/>
            <br />
            <sub><b>Raul Ruiz</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/royduin">
            <img src="https://avatars.githubusercontent.com/u/1703233?v=4" width="100;" alt="royduin"/>
            <br />
            <sub><b>Roy Duineveld</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/CaddyDz">
            <img src="https://avatars.githubusercontent.com/u/13698160?v=4" width="100;" alt="CaddyDz"/>
            <br />
            <sub><b>Salim Djerbouh</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/pendalff">
            <img src="https://avatars.githubusercontent.com/u/236587?v=4" width="100;" alt="pendalff"/>
            <br />
            <sub><b>Fukalov Sem</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/sobhanatar">
            <img src="https://avatars.githubusercontent.com/u/1507325?v=4" width="100;" alt="sobhanatar"/>
            <br />
            <sub><b>Sobhan Atar</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/mightyteja">
            <img src="https://avatars.githubusercontent.com/u/2662727?v=4" width="100;" alt="mightyteja"/>
            <br />
            <sub><b>Teja Babu S</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/kekenec">
            <img src="https://avatars.githubusercontent.com/u/11806874?v=4" width="100;" alt="kekenec"/>
            <br />
            <sub><b>Kekenec</b></sub>
        </a>
    </td></tr>
<tr>
    <td align="center">
        <a href="https://github.com/sasin91">
            <img src="https://avatars.githubusercontent.com/u/808722?v=4" width="100;" alt="sasin91"/>
            <br />
            <sub><b>Sasin91</b></sub>
        </a>
    </td></tr>
</table>
<!-- readme: contributors -end -->

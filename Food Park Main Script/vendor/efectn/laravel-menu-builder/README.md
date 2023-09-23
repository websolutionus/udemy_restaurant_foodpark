# Drag and Drop Menu Builder for Laravel 9.x

[![Latest Stable Version](https://poser.pugx.org/efectn/laravel-menu-builder/v/stable)](https://packagist.org/packages/efectn/laravel-menu-builder) [![Latest Unstable Version](https://poser.pugx.org/efectn/laravel-menu-builder/v/unstable)](https://packagist.org/packages/efectn/laravel-menu-builder) [![Total Downloads](https://poser.pugx.org/efectn/laravel-menu-builder/downloads)](https://packagist.org/packages/efectn/laravel-menu-builder) [![Monthly Downloads](https://poser.pugx.org/efectn/laravel-menu-builder/d/monthly)](https://packagist.org/packages/efectn/laravel-menu-builder)

Originally forked from [harimayco/wmenu-builder](https://github.com/harimayco/wmenu-builder), but under active maintenance. 

![Laravel drag and drop menu](https://raw.githubusercontent.com/efectn/wmenu-builder/master/screenshot.png)

### Installation

1. Run

```php
composer require efectn/laravel-menu-builder
```

2. Add facade in the config/app.php (optional )

```php
'Menu' => Efectn\Menu\Facades\Menu::class,
```

4. Run publish to get configs, views, assets and migrations.

```php
php artisan vendor:publish --provider="Efectn\Menu\MenuServiceProvider"
```

5. Configure (optional) in **_config/menu.php_** :

- **_CUSTOM MIDDLEWARE:_** You can add you own middleware
- **_TABLE PREFIX:_** By default this package will create 2 new tables named "menus" and "menu_items" but you can still add your own table prefix avoiding conflict with existing table
- **_TABLE NAMES_** If you want use specific name of tables you have to modify that and the migrations
- **_Custom routes_** If you want to edit the route path you can edit the field
- **_Role Access_** If you want to enable roles (permissions) on menu items

6. Run migrate

```php
php artisan migrate
```

DONE

### Menu Builder Usage Example - displays the builder

On your view blade file

```php
@extends('app')

@section('contents')
    {!! Menu::render() !!}
@endsection

//YOU MUST HAVE JQUERY LOADED BEFORE menu scripts
@push('scripts')
    {!! Menu::scripts() !!}
@endpush
```

### Using The Model

Call the model class

```php
use Efectn\Menu\Models\Menus;
use Efectn\Menu\Models\MenuItems;

```

### Menu Usage Example (a)

A basic two-level menu can be displayed in your blade template

##### Using Model Class
```php

/* get menu by id*/
$menu = Menus::find(1);
/* or by name */
$menu = Menus::where('name','Test Menu')->first();

/* or get menu by name and the items with EAGER LOADING (RECOMENDED for better performance and less query call)*/
$menu = Menus::where('name','Test Menu')->with('items')->first();
/*or by id */
$menu = Menus::where('id', 1)->with('items')->first();

//you can access by model result
$public_menu = $menu->items;

//or you can convert it to array
$public_menu = $menu->items->toArray();

```

##### or Using helper
```php
// Using Helper 
$public_menu = Menu::getByName('Public'); //return array

```

### Menu Usage Example (b)

Now inside your blade template file place the menu using this simple example

```php
<div class="nav-wrap">
    <div class="btn-menu">
        <span></span>
    </div><!-- //mobile menu button -->
    <nav id="mainnav" class="mainnav">

        @if($public_menu)
        <ul class="menu">
            @foreach($public_menu as $menu)
            <li class="">
                <a href="{{ $menu['link'] }}" title="">{{ $menu['label'] }}</a>
                @if( $menu['child'] )
                <ul class="sub-menu">
                    @foreach( $menu['child'] as $child )
                        <li class=""><a href="{{ $child['link'] }}" title="">{{ $child['label'] }}</a></li>
                    @endforeach
                </ul><!-- /.sub-menu -->
                @endif
            </li>
            @endforeach
        @endif

        </ul><!-- /.menu -->
    </nav><!-- /#mainnav -->
 </div><!-- /.nav-wrap -->
```

### HELPERS

### Get Menu Items By Menu ID

```php
use Efectn\Menu\Facades\Menu;
...
/*
Parameter: Menu ID
Return: Array
*/
$menuList = Menu::get(1);
```

### Get Menu Items By Menu Name

In this example, you must have a menu named _Admin_

```php
use Efectn\Menu\Facades\Menu;
...
/*
Parameter: Menu ID
Return: Array
*/
$menuList = Menu::getByName('Admin');
```

### Customization

you can edit the menu interface in **_resources/views/vendor/menu-builder/menu-html.blade.php_**

### Credits

- [wmenu](https://github.com/lordmacu/wmenu) - laravel package menu like wordpress
- [wmenu-builder](https://github.com/harimayco/wmenu-builder) - Laravel Drag and Drop Dynamic Menu Generator (Wordpress look alike)

### Compatibility

- Tested with Laravel 9.x.

### Known Issues
**Note:** Look at https://github.com/efectn/laravel-menu-builder/issues/1.
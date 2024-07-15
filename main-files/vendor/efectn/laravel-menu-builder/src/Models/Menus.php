<?php

namespace Efectn\Menu\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';

    public function __construct(array $attributes = [])
    {
        //parent::construct( $attributes );
        $this->table = config('menu.table_prefix') . config('menu.table_name_menus');
    }

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }

    public function items()
    {
        return $this->hasMany('Efectn\Menu\Models\MenuItems', 'menu_id')->with('child')->where('parent_id', 0)->orderBy('sort', 'ASC');
    }
}

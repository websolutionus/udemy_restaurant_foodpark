<?php

namespace Efectn\Menu\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{

    protected $table = null;

    protected $fillable = ['label', 'link', 'parent_id', 'sort', 'class', 'menu_id', 'depth', 'role_id'];

    public function __construct(array $attributes = [])
    {
        //parent::construct( $attributes );
        $this->table = config('menu.table_prefix') . config('menu.table_name_items');
    }

    public function getSons($id)
    {
        return $this->where("parent_id", $id)->get();
    }
    public function getAll($id)
    {
        return $this->where("menu_id", $id)->orderBy("sort", "asc")->get();
    }

    public static function getNextSortRoot($menu)
    {
        return self::where('menu_id', $menu)->max('sort') + 1;
    }

    public function parentMenu()
    {
        return $this->belongsTo('Efectn\Menu\Models\Menus', 'menu_id');
    }

    public function child()
    {
        return $this->hasMany('Efectn\Menu\Models\MenuItems', 'parent_id')->orderBy('sort', 'ASC');
    }
}

<?php

namespace Efectn\Menu;

use Efectn\Menu\Models\Menus;
use Efectn\Menu\Models\MenuItems;
use Illuminate\Support\Facades\DB;

class MenuBuilder
{

    public function render()
    {
        $menu = new Menus();
        $menuItems = new MenuItems();
        $menuList = $menu->select(['id', 'name'])->get();
        $menuList = $menuList->pluck('name', 'id')->prepend(__("menu-builder::messages.select_menu"), 0)->all();

        if ((request()->has("action") && empty(request()->input("menu"))) || request()->input("menu") == '0') {
            return view('menu-builder::menu-html')->with("menulist" , $menuList);
        }

        if(empty(request()?->input('menu'))) {
            request()->merge(['menu' => Menus::first()->id]);
        }

        $menu = Menus::find(request()->input("menu"));
        $menus = $menuItems->getAll(request()->input("menu"));

        $data = ['menus' => $menus, 'indmenu' => $menu, 'menulist' => $menuList];
        if( config('menu.use_roles')) {
            $data['roles'] = DB::table(config('menu.roles_table'))->select([config('menu.roles_pk'),config('menu.roles_title_field')])->get();
            $data['role_pk'] = config('menu.roles_pk');
            $data['role_title_field'] = config('menu.roles_title_field');
        }

        return view('menu-builder::menu-html', $data);
    }

    public function scripts()
    {
        return view('menu-builder::scripts');
    }

    public function select($name = "menu", $menulist = array())
    {
        $html = '<select name="' . $name . '">';

        foreach ($menulist as $key => $val) {
            $active = '';
            if (request()->input('menu') == $key) {
                $active = 'selected="selected"';
            }
            $html .= '<option ' . $active . ' value="' . $key . '">' . $val . '</option>';
        }
        $html .= '</select>';
        return $html;
    }


    /**
     * Returns empty array if menu not found now.
     * Thanks @sovichet
     *
     * @param $name
     * @return array
     */
    public static function getByName($name)
    {
        $menu = Menus::byName($name);
        return is_null($menu) ? [] : self::get($menu->id);
    }

    public static function get($menu_id)
    {
        $menuItem = new MenuItems;
        $menu_list = $menuItem->getAll($menu_id);

        $roots = $menu_list->where('menu_id', (integer) $menu_id)->where('parent_id', 0);

        $items = self::tree($roots, $menu_list);
        return $items;
    }

    private static function tree($items, $all_items)
    {
        $data_arr = array();
        $i = 0;
        foreach ($items as $item) {
            $data_arr[$i] = $item->toArray();
            $find = $all_items->where('parent_id', $item->id);

            $data_arr[$i]['child'] = array();

            if ($find->count()) {
                $data_arr[$i]['child'] = self::tree($find, $all_items);
            }

            $i++;
        }

        return $data_arr;
    }

}

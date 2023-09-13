<?php

namespace Efectn\Menu\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Efectn\Menu\Models\Menus;
use Efectn\Menu\Models\MenuItems;

class MenuController extends Controller
{

    public function createMenu()
    {

        $menu = new Menus();
        $menu->name = request()->input("menuname");
        $menu->save();

        return json_encode(array("resp" => $menu->id));
    }

    public function deleteMenu()
    {
        $menus = new MenuItems();
        $all = $menus->getAll(request()->input("id"));
        if (count($all) == 0) {
            $menu = Menus::find(request()->input("id"));
            $menu->delete();

            return json_encode(array("resp" => __("menu-builder::messages.deleting_this_menu")));
        }

        return json_encode(array("resp" => __("menu-builder::messages.delete_all_items"), "error" => 1));
    }

    public function updateMenu()
    {
        $menu = Menus::find(request()->input("idmenu"));
        $menu->name = request()->input("menuname");
        $menu->save();

        if (is_array(request()->input("arraydata"))) {
            foreach (request()->input("arraydata") as $value) {
                $menuItem = MenuItems::find($value["id"]);
                $menuItem->parent_id = $value["parent"];
                $menuItem->sort = $value["sort"];
                $menuItem->depth = $value["depth"];
                if (config('menu.use_roles')) {
                    $menuItem->role_id = $value["role_id"];
                }
                $menuItem->save();
            }
        }

        return json_encode(array("resp" => 1));
    }

    public function deleteMenuItem()
    {
        $menuItem = MenuItems::find(request()->input("id"));
        $menuItem->delete();
    }

    public function updateMenuItem()
    {
        $arrayData = request()->input("arraydata");
        if (is_array($arrayData)) {
            foreach ($arrayData as $value) {
                $menuItem = MenuItems::find($value['id']);
                $menuItem->label = $value['label'];
                $menuItem->link = $value['link'];
                $menuItem->class = $value['class'];
                if (config('menu.use_roles')) {
                    $menuItem->role_id = $value['role_id'] ? $value['role_id'] : 0 ;
                }
                $menuItem->save();
            }
        } else {
            $menuItem = MenuItems::find(request()->input("id"));
            $menuItem->label = request()->input("label");
            $menuItem->link = request()->input("url");
            $menuItem->class = request()->input("clases");
            if (config('menu.use_roles')) {
                $menuItem->role_id = request()->input("role_id") ? request()->input("role_id") : 0 ;
            }
            $menuItem->save();
        }
    }

    public function addMenuItem()
    {
        $menuItem = new MenuItems();
        $menuItem->label = request()->input("labelmenu");
        $menuItem->link = request()->input("linkmenu");
        if (config('menu.use_roles')) {
            $menuItem->role_id = request()->input("rolemenu") ? request()->input("rolemenu")  : 0 ;
        }
        $menuItem->menu_id = request()->input("idmenu");
        $menuItem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        $menuItem->save();

    }
}

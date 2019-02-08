<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Menu;

class RoleController extends Controller
{
    /**
     * 菜单列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $menus = Menu::orderBy('id','desc')->paginate(3);
        return view('user.menu.list', compact('menus'));
    }
}

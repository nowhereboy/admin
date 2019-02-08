<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
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

    /**
     * 新增菜单页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('user.menu.create');
    }

    /**
     * 保存新增的菜单信息
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:128',
            'route' => 'required|max:128',
            'sort' => 'required|numeric|min:0',
            'type' => 'required|numeric|in:1,2',
            'status' => 'required|numeric|in:0,1',
            'top_id' => 'required|numeric|min:0',
            'parent_id' => 'required|numeric|min:0',
        ]);

        $name = trim($request->input('name'));
        $route = trim($request->input('route'));
        $sort = intval($request->input('sort'));
        $type = intval($request->input('type'));
        $status = intval($request->input('status'));
        $top_id = intval($request->input('top_id'));
        $parent_id = intval($request->input('parent_id'));
        $pid = $parent_id > 0 ? $parent_id : $top_id;
        // 检查菜单名称和菜单路由是否已被使用
        if (Menu::where('name', $name)->orWhere('route', $route)->count() > 0) {
            return redirect('/menus/create')->withErrors(['菜单名称或路由已添加'])->withInput();
        }
        // 保存菜单信息
        $model = new Menu();
        $model->name = $name;
        $model->route = $route;
        $model->sort = $sort;
        $model->type = $type;
        $model->status = $status;
        $model->pid = $pid;

        if ($model->save()) {
            return redirect('/menus');
        } else {
            return redirect('/menus/create')->withErrors(['保存失败'])->withInput();
        }
    }

    /**
     * 编辑菜单页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $roles = Role::orderBy('id','desc')->paginate(3);
        return view('user.role.edit', compact('roles'));
    }

    // 更新修改的菜单信息
    public function update()
    {

    }

    // 删除菜单信息
    public function destroy()
    {

    }
}

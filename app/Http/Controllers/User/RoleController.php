<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Role;
use App\Menu;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * 角色列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::orderBy('id','desc')->paginate(3);
        return view('user.role.list', compact('roles'));
    }

    /**
     * 新增角色页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('user.role.create');
    }

    /**
     * 保存新增的角色信息
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:128',
            'status' => 'required|numeric|in:0,1',
        ]);

        $name = trim($request->input('name'));
        $status = intval($request->input('status'));
        $comment = trim($request->input('comment'));

        // 检查角色名称是否已被使用
        if (Role::where('name', $name)->count() > 0) {
            return redirect('/roles/create')->withErrors(['角色名称已被使用'])->withInput();
        }
        // 保存角色信息
        $model = new Role();
        $model->name = $name;
        $model->status = $status;
        $model->comment = $comment;
        if ($model->save()) {
            return redirect('/roles');
        } else {
            return redirect('/roles/create')->withErrors(['保存失败'])->withInput();
        }
    }

    /**
     * 编辑角色页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $roles = Role::orderBy('id','desc')->paginate(3);
        return view('user.role.edit', compact('roles'));
    }

    // 更新修改的角色信息
    public function update()
    {

    }

    // 删除角色信息
    public function destroy()
    {

    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * 用户列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(3);
        return view('user.user.list', compact('users'));
    }
}

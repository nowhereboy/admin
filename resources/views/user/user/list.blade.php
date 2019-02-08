@extends('layouts.app')

@section('content')
    <section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><i class="icon-user"></i>用户权限管理</li>
                    <li class="active">用户管理</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        用户列表
                    </header>
                    <div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="sample_1_length" class="dataTables_length">
                                    <label>
                                        <select size="1" name="sample_1_length" aria-controls="sample_1" class="form-control">
                                            <option value="10" selected="selected">10</option><option value="25">25</option>
                                            <option value="50">50</option><option value="100">100</option>
                                        </select> records per page
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_filter" id="sample_1_filter">
                                    <label>Search: <input type="text" aria-controls="sample_1" class="form-control"></label>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped border-top dataTable">
                            <thead>
                            <tr role="row">
                                <th>用户ID</th>
                                <th>用户名</th>
                                <th>邮箱</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @if(!empty($users))
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="/user/{{$user->id}}">{{$user->id}}</a></td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" align="center">没有数据</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        {{--<div class="row">--}}
                        {{--<div class="col-sm-6">--}}
                        {{--<div class="dataTables_info" id="sample_1_info">共100条数据</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6">--}}
                        {{--<div class="dataTables_paginate paging_bootstrap pagination">--}}
                        {{--<ul>--}}
                        {{--<li class="prev disabled"><a href="#">← Prev</a></li>--}}
                        {{--<li class="active"><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li class="next"><a href="#">Next → </a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}


                        {{$users->links()}}
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
    </section>
@endsection

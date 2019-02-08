@extends('layouts.app')

@section('content')
    <section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><i class="icon-user"></i>用户权限管理</li>
                    <li class="active">菜单管理</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        菜单列表
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
                            <div class="col-sm-3">
                                <div class="dataTables_filter" id="sample_1_filter">
                                    <label>Search: <input type="text" aria-controls="sample_1" class="form-control"></label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="dataTables_filter" id="sample_1_filter">
                                    <a class="btn btn-primary" href="/menus/create">新增菜单</a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped border-top dataTable">
                            <thead>
                            <tr role="row">
                                <th>菜单ID</th>
                                <th>菜单名称</th>
                                <th>路由</th>
                                <th>类型</th>
                                <th>状态</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @if(!is_null($menus) && $menus->count() > 0)
                                @foreach($menus as $menu)
                                    <tr>
                                        <td><a href="/menus/{{$menu->id}}">{{$menu->id}}</a></td>
                                        <td>{{$menu->name}}</td>
                                        <td>{{$menu->route}}</td>
                                        <td>
                                            @if($menu->type == 1)
                                                <span class="label label-success">菜单</span>
                                            @else
                                                <span class="label label-primary">接口</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($menu->status == 1)
                                                <span class="label label-success">可用</span>
                                            @else
                                                <span class="label label-danger">不可用</span>
                                            @endif
                                        </td>
                                        <td>{{$menu->created_at}}</td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" align="center">没有数据</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        {{$menus->links()}}
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
    </section>
@endsection

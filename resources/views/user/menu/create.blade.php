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
                        新增菜单
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" action="/menus">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name" class="col-lg-1 control-label">菜单名称</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="route" class="col-lg-1 control-label">路由</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="route" name="route" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="route" class="col-lg-1 control-label">父级菜单</label>
                                <div class="col-lg-2">
                                    <select id="top_id" name="top_id" class="form-control">
                                        <option value="0">请选择</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select id="parent_id" name="parent_id" class="form-control">
                                        <option value="0">请选择</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sort" class="col-lg-1 control-label">排序</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="sort" name="sort" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="type" class="col-lg-1 control-label">类型</label>
                                <div class="col-lg-4">
                                    <label class="radio-inline">
                                        <input type="radio" name="type" id="type" value="1" checked="">
                                        菜单
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="type" id="type" value="2">
                                        接口
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-lg-1 control-label">状态</label>
                                <div class="col-lg-4">
                                    <label class="radio-inline">
                                        <input type="radio" name="status" id="status" value="1" checked="">
                                        可用
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="status" id="status" value="0">
                                        不可用
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-4">
                                    <button type="submit" class="btn btn-danger">保存</button>
                                    <a class="btn btn-default" href="/menus">取消</a>
                                </div>
                            </div>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><i class="icon-user"></i>用户权限管理</li>
                    <li class="active">角色管理</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        新增角色
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" action="/roles">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name" class="col-lg-1 control-label">角色名称</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="name" name="name">
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
                                <label for="comment" class="col-lg-1 control-label">备注</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="comment" name="comment">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-4">
                                    <button type="submit" class="btn btn-danger">保存</button>
                                    <a class="btn btn-default" href="/roles">取消</a>
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

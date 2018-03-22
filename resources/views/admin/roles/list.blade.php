@extends('admin.layouts.admin')
@section('m1', 'active open')
@section('m10', 'open')
@section('m12', 'active open')
@section('title', '角色管理')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">角色管理</span>
                        </div>
                        <div class="actions">
                            <a class="btn  green" href="/admin/role/edit">
                                添加角色<i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">

                        <div class="table-scrollable">
                            <table class="table table-hover table-bordered ">
                                <thead>
                                <tr>
                                    <th> 编号 </th>
                                    <th> 名称</th>
                                    <th> 显示名称 </th>
                                    <th> 描述</th>
                                    <th> 操作 </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($list as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        <td> {{ $row->name }} </td>
                                        <td> {{ $row->display_name }} </td>
                                        <td> {{ $row->description }} </td>
                                        <td>
                                            <a href="/admin/role/edit/{{$row->id}}" class="btn btn-outline  btn-sm purple">
                                                <i class="fa fa-edit"></i> 修改 </a>
                                            <button
                                                    data-href="/admin/role/del/{{$row->id}}"
                                                    class="btn green-sharp btn-large listdel"
                                                    data-toggle="confirmation"
                                                    data-original-title="确定删除?" title="" >删除</button>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12" style="text-align: center;">
                                {{ $list->links() }}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>

@endsection
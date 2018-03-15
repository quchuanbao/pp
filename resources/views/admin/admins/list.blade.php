@extends('admin.layouts.admin')
@section('m5', 'active open')
@section('m50', 'open')
@section('m51', 'active open')
@section('title', '管理员管理')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">管理员管理</span>
                        </div>
                        <div class="actions">
                            <a class="btn  green" href="/admin/admins/edit">
                                添加管理员<i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">

                        <div class="table-scrollable">
                            <table class="table table-hover table-bordered ">
                                <thead>
                                <tr>
                                    <th> 编号 </th>
                                    <th> 照片 </th>
                                    <th> 姓名 </th>
                                    <th> 电话 </th>
                                    <th> 邮箱 </th>
                                    <th> 最后登录时间 </th>
                                    <th> 状态 </th>
                                    <th> 操作 </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td> {{ $admin->id }} </td>
                                        <td> <img src="{{ $admin->pic }}" width="100"> </td>
                                        <td> {{ $admin->name }} </td>
                                        <td> {{ $admin->tel }} </td>
                                        <td> {{ $admin->email }} </td>
                                        <td> {{ $admin->updated_at }} </td>
                                        <td>
                                           正常
                                        </td>
                                        <td>
                                            <a href="/admin/admins/edit/{{$admin->id}}" class="btn btn-outline  btn-sm purple">
                                                <i class="fa fa-edit"></i> 修改 </a>
                                            <button
                                                    data-href="/admin/admins/del/{{$admin->id}}"
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
                                {{ $admins->links() }}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>
@endsection
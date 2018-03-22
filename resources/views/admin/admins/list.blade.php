@extends('admin.layouts.admin')
@section('m1', 'active open')
@section('m10', 'open')
@section('m11', 'active open')
@section('title', '管理员管理')
@section('content')


    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            {{--<i class="icon-social-dribbble font-green"></i>--}}
                            <span class="caption-subject font-green bold uppercase">管理员管理</span>
                        </div>
                        <div class="actions">
                            <a class="btn  green" href="/admin/admins/edit">
                                添加管理员<i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/admins/') }}"  id="form" >
                            {{ csrf_field() }}



                            <div class="col-md-4">
                                <select name="role[]" class="bs-select form-control" multiple>
                                    @foreach ($role as $row)
                                        <option value="{{$row->id}}"
                            @if ( @in_array($row->id,$request['role']) ) selected="selected" @endif
                                        >{{$row->display_name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-4 col-sm-4">
                                <div id="sample_1_filter" class="dataTables_filter">
                                    <input type="text" name="name" placeholder="姓名" class="form-control" value="{{ old('name',$request['name'])}}">
                                </div>
                            </div>
                            {{--<div class="col-md-2 col-sm-2">--}}
                            {{--<div id="sample_1_filter" class="dataTables_filter">--}}
                            {{--<span>草稿 </span> <input  type="checkbox" value="1" name="hot" class="make-switch" @if(old('title',$request['hot'])==1) checked @endif data-on-color="success" data-off-color="warning">--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="col-md-2 col-sm-2">
                                <div id="sample_1_filter" class="dataTables_filter">
                                    <button type="submit" class="btn green">查询</button>
                                </div>
                            </div>
                        </form>
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
                                    <th> 角色 </th>
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
                                            @foreach ($admin->getRoles as $row)
                                                {{$row['display_name']}}<br>
                                            @endforeach

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
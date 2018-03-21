@extends('admin.layouts.admin')
@section('m5', 'active open')
@section('m50', 'open')
@section('m51', 'active open')

@section('title', '角色管理')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">

                        <span class="caption-subject font-green sbold uppercase">角色管理</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-success" href="/admin/role">
                            <i class="fa fa-arrow-left fa-fw"></i> 返回列表
                        </a>
                    </div>
                </div>
                <div class="portlet-body">


                    <form  class="form-horizontal" role="form" method="POST" action="{{ url('/admin/role/store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$list->id}}">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                            <!-- END PAGE BASE CONTENT -->
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3">角色名称
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="name" id="name" data-required="1" class="form-control" value="{{ old('name',$list->name) }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <label for="name" class="col-md-3 control-label"><strong>{{ $errors->first('name') }}</strong></label>
                                @endif
                            </div>


                            <div class="form-group {{ $errors->has('display_name') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">显示名称
                                    <span class="required" aria-required="true"> * </span>
                                </label>

                                <div class="col-md-4">
                                    <input type="text" name="display_name" id="display_name" class="form-control" value="{{ old('display_name',$list->display_name) }}" required>
                                </div>

                                @if ($errors->has('display_name'))
                                    <label for="display_name" class="col-md-3 control-label"><strong>{{ $errors->first('display_name') }}</strong></label>
                                @endif
                            </div>



                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">分配权限</label>
                                    <div class="col-md-9">
                                        <select multiple="multiple" class="multi-select" id="permission" name="permission[]">
                                            @foreach ($permission as $row)
                                                <option value="{{$row->id}}" @if ($list->hasPermission($row->name)) selected @endif >{{$row->display_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>





                            <div class="form-group">
                                <label class="control-label col-md-3">简介
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <textarea name="description" class="form-control" rows="10">{{ old('description',$list->description) }}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">保存</button>
                                    <button type="button" class="btn default">取消</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
    @include('admin.layouts.log')
@endsection

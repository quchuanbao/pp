@extends('admin.layouts.admin')
@section('m5', 'active open')
@section('m50', 'open')
@section('m51', 'active open')

@section('title', '管理员管理')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">

                        <span class="caption-subject font-green sbold uppercase">管理员管理</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-success" href="/admin/admins">
                            <i class="fa fa-arrow-left fa-fw"></i> 返回列表
                        </a>
                    </div>
                </div>
                <div class="portlet-body">


                    <form  class="form-horizontal" role="form" method="POST" action="{{ url('/admin/admins/store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$admins->id}}">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                            <!-- END PAGE BASE CONTENT -->
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3">姓名
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="name" id="name" data-required="1" class="form-control" value="{{ old('name',$admins->name) }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <label for="name" class="col-md-3 control-label"><strong>{{ $errors->first('name') }}</strong></label>
                                @endif
                            </div>


                            <div class="form-group {{ $errors->has('pic') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3">照片
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">

                                        @if ($admins->pic)
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{$admins->pic}}"/>
                                            </div>
                                        @endif


                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> 上传图片 </span>
                                                                <span class="fileinput-exists"> 重新上传 </span>
                                                                <input type="file" name="pic"> </span>
                                            <a href="javascript:;" class="btn red fileinput-exists"
                                               data-dismiss="fileinput"> 移除图片 </a>
                                        </div>
                                    </div>

                                </div>
                                @if ($errors->has('pic'))
                                    <label for="title"
                                           class="col-md-3 control-label"><strong>{{ $errors->first('pic') }}</strong></label>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('tel') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">电话
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="tel" id="tel" class="form-control" placeholder="电话" value="{{ old('tel',$admins->tel) }}" required>
                                    </div>
                                </div>
                                @if ($errors->has('tel'))
                                    <label for="tel" class="col-md-3 control-label"><strong>{{ $errors->first('tel') }}</strong></label>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">登录邮箱
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="登录邮箱" value="{{ old('email',$admins->email) }}" required>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <label for="email" class="col-md-3 control-label"><strong>{{ $errors->first('email') }}</strong></label>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3">密码
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password"  {{ $admins->id ? '' : 'required' }} placeholder="请输入密码">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <label for="password" class="col-md-3 control-label"><strong>{{ $errors->first('password') }}</strong></label>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">确认密码
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password-confirm"  placeholder="请确认密码" name="password_confirmation" {{ $admins->id ? '' : 'required' }}>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">简介
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <textarea name="description" class="form-control" rows="10">{{ old('description',$admins->description) }}</textarea>
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
@endsection

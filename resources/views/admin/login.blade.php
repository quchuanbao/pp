@extends('admin.layouts.login')
@section('content')
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{ url('/admin/login') }}" method="post">
            {{ csrf_field() }}
            <h3 class="form-title font-green">{{ config('app.adminName') }}</h3>
            @if ($errors->has('email') || $errors->has('password'))
                <div class="alert alert-danger ">
                    <button class="close" data-close="alert"></button>
                    <span> 用户名或密码错误. </span>
                </div>
            @endif

            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">登录名</label>
                <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix" name="email"
                       value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">密码</label>
                <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix"
                       name="password" required>
            </div>
            <div class="form-actions" style="text-align: center;">
                <button type="submit" class="btn green uppercase">登 录</button>
            </div>
        </form>
        <!-- END LOGIN FORM -->
    </div>
@endsection
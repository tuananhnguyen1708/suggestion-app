@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Đăng nhập') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Tên tài khoản') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--<!DOCTYPE html>--}}

{{--<html lang="en">--}}

{{--<head>--}}
    {{--<meta charset="utf-8" />--}}
    {{--<title>Đăng nhập</title>--}}
    {{--<meta name="description" content="Latest updates and statistic charts">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">--}}

    {{--<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>--}}
    {{--<script>--}}
        {{--WebFont.load({--}}
            {{--google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},--}}
            {{--active: function() {--}}
                {{--sessionStorage.fonts = true;--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}

    {{--<link href="{{asset('../../../assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />--}}

    {{--<link href="{{asset('../../../assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />--}}

    {{--<link rel="shortcut icon" href="{{asset('../../../assets/demo/default/media/img/logo/favicon.ico')}}" />--}}
{{--</head>--}}

{{--<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">--}}

    {{--<div class="m-grid m-grid--hor m-grid--root m-page">--}}
        {{--<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(../../../assets/app/media/img//bg/bg-3.jpg);">--}}
            {{--<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">--}}
                {{--<div class="m-login__container">--}}

                    {{--<div class="m-login__logo">--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{asset('../../../assets/app/media/img/logos/logo-1.png')}}">--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="m-login__signin">--}}
                        {{--<div class="m-login__head">--}}
                            {{--<h3 class="m-login__title">Đăng nhập</h3>--}}
                        {{--</div>--}}

                        {{--<form class="m-login__form m-form" method="POST" action="{{ route('login') }}" >--}}
                            {{--@csrf--}}
                            {{--<div class="form-group m-form__group">--}}
                                {{--<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} m-input" type="text" placeholder="Tên tài khoản" name="name" autocomplete="off" >--}}
                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}

                            {{--<div class="form-group m-form__group">--}}
                                {{--<input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} m-input m-login__form-input--last" type="password" placeholder="Mật khẩu" name="password" >--}}
                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}

                            {{--<div class="row m-login__form-sub">--}}
                                {{--<div class="col m--align-left m-login__form-left">--}}
                                    {{--<label class="m-checkbox  m-checkbox--focus">--}}
                                        {{--<input type="checkbox" name="remember"> Ghi nhớ--}}
                                        {{--<span></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="col m--align-right m-login__form-right">--}}
                                    {{--<a href="javascript:;" id="m_login_forget_password" class="m-link">Quên mật khẩu ?</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="m-login__form-action">--}}
                                {{--<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit">Đăng nhập</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                    {{--<div class="m-login__forget-password">--}}
                        {{--<div class="m-login__head">--}}
                            {{--<h3 class="m-login__title">Quên mật khẩu ?</h3>--}}
                            {{--<div class="m-login__desc">Nhập email của bạn để thiết lập lại mật khẩu của bạn:</div>--}}
                        {{--</div>--}}
                        {{--<form class="m-login__form m-form" action="">--}}
                            {{--@csrf--}}
                            {{--<div class="form-group m-form__group">--}}
                                {{--<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">--}}
                            {{--</div>--}}
                            {{--<div class="m-login__form-action">--}}
                                {{--<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill--}}
                                {{--m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">--}}
                                    {{--Gửi yêu cầu--}}
                                {{--</button>--}}
                                {{--<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Thoát</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<script src="{{asset('../../../assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{asset('../../../assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{asset('../../../assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>--}}

{{--</body>--}}

{{--</html>--}}

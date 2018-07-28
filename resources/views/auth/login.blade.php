@extends('layouts.app')
@section('header')
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"/>
  <style>
      .invalid-feedback {
          color: red;
      }
  </style>
@endsection
@section('content')
<form class="ui form" action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
  <h4 class="ui dividing header">Đăng nhập tài khoản Gang#3</h4>
  <div class="field">
    <label>Địa chỉ email</label>
    <div class="two fields">
      <div class="field">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>
    </div>
  </div>
    <div class="field">
    <label>Mật khẩu</label>
    <div class="fields">
      <div class="two field">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      </div>
    </div>
      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
  </div>
  <button type="submit" class="ui button" tabindex="0">{{ __('Login') }}</button>
</form>
@endsection

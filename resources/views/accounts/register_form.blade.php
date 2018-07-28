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
<form class="ui form" action="{{ route('student-register-submit') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <h4 class="ui dividing header">Đăng ký tài khoản Gang#3</h4>
  <div class="field">
    <label>Địa chỉ email</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="email" placeholder="">
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>
    </div>
  </div>
  <div class="fields">
      <div class="seven wide field">
      <label>Tên tài khoản</label>
        <input type="text" name="username" placeholder="">
        @if ($errors->has('username'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('username') }}</strong>
          </span>
        @endif
      </div>
  </div>
  <div class="field">
    <label>Mật khẩu</label>
    <div class="fields">
      <div class="two field">
        <input type="password" name="password" placeholder="">
      </div>
       <div class="two field">
        <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
      </div>
      @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>
  </div>
  <h4 class="ui dividing header">Thông tin tài khoản</h4>
  <div class="field">
    <label>Tên đầy đủ</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="fullname" placeholder="">
        @if ($errors->has('fullname'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('fullname') }}</strong>
          </span>
        @endif
      </div>
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Ngày sinh</label>
      <input type="text" name="dob">
      @if ($errors->has('dob'))
        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('dob') }}</strong>
          </span>
      @endif
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Ảnh đại diện</label>
      <input type="file" onchange="readURL(this);" name="avatar">
      <img src="{{ asset('images/logo.jpg') }}" id="imageProfile" width="100px" height="100px" style="border: 1px solid rgba(34,36,38,.15); margin-top: 10px;" alt="">
    </div>
    @if ($errors->has('avatar'))
      <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('avatar') }}</strong>
          </span>
    @endif
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Facebook</label>
      <input type="text" name="facebook">
      @if ($errors->has('facebook'))
        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('facebook') }}</strong>
          </span>
      @endif
    </div>
    <div class="seven wide field">
      <label>Skype</label>
      <input type="text" name="skype">
      @if ($errors->has('skype'))
        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('skype') }}</strong>
          </span>
      @endif
    </div>
  </div>
  <button type="submit" class="ui button" tabindex="0">Đăng ký</button>
</form>
@endsection

@section('footer')
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script type="text/javascript">
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#imageProfile')
                      .attr('src', e.target.result)
                      .width(100)
                      .height(100);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
  </script>
@endsection

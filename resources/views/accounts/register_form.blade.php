@extends('layouts.app')

@section('content')
<form class="ui form">
  <h4 class="ui dividing header">Đăng ký tài khoản Gang#3</h4>
  <div class="field">
    <label>Địa chỉ email</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="email" placeholder="">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Tên tài khoản</label>
    <div class="fields">
      <div class="two wide field">
        <input type="text" name="username" placeholder="">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Mật khẩu</label>
    <div class="fields">
      <div class="two field">
        <input type="password" name="password" placeholder="">
      </div>
       <div class="two field">
        <input type="password" name="repassword" placeholder="Nhập lại mật khẩu">
      </div>
    </div>
  </div>
  <h4 class="ui dividing header">Thông tin tài khoản</h4>
  <div class="field">
    <label>Tên đầy đủ</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="fullname" placeholder="">
      </div>
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Ngày sinh</label>
      <input type="text" name="dob">
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Ảnh đại diện</label>
      <input type="file" name="avatar">
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Facebook</label>
      <input type="text" name="facebook">
    </div>
    <div class="seven wide field">
      <label>Skype</label>
      <input type="text" name="skype">
    </div>
  </div>
  <div class="ui button" tabindex="0">Đăng ký</div>
</form>
@endsection

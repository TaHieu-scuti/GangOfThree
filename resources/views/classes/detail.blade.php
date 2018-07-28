@extends('layouts.default')

@section('content')
<h2 class="ui header">Lop hoc PHP Can ban</h2>
<div class="ui grid">
  <div class="eleven wide column">
    <p>To hero in Python 3. Learn Python like a Professional! Start from the basics and go all the way to creating your own applications and games!</p>
  </div>
  <div class="five wide column">
      <div class="ui feed">
          <div class="event">
            <div class="label">
              <img src="/images/avatars/hieu.jpg">
            </div>
            <div class="content">
              <div class="summary">
                 Ta Quang Hieu
              </div>
              <div class="extra text">
                Senior Web Developer
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
<div class="ui grid">
    <div class="eleven wide column">
        @include('classes.lessions')
    </div>
    <div class="five wide column">
        @include('classes.members')
    </div>
</div>
@endsection

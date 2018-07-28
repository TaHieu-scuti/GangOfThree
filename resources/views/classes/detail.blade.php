@extends('layouts.default')

@section('content')
<h2 class="ui header">{{ $class->name }}</h2>
<div class="ui grid">
  <div class="eleven wide column">
    <p>{{ $class->desciption }}</p>
  </div>
  <div class="five wide column">
      <div class="ui feed">
          <div class="event">
            <div class="label">
              <img src="{{ asset('images/avatars/'. Auth::user()->avatar) }}" width="28px" height="60px">
            </div>
            <div class="content">
              <div class="summary">
                 {{ Auth::user()->fullname }}
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

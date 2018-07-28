@extends('layouts.default')

@section('header')
    <style>
        .invalid-feedback {
            color: red;
        }
    </style>
@endsection

@section('content')
<form class="ui form" action="{{ route('store-lession') }}" method="POST">
    @csrf
    <h4 class="ui dividing header">Tạo bài giảng mới</h4>
    <div class="field">
        <label>Tên bài giảng</label>
        <div class="two fields">
                <div class="field">
                <input type="text" name="name" placeholder="">
                <input type="hidden" name="manager_id" placeholder="" value="{{ Auth::user()->id }}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
            </div>
        </div>
    </div>
    <div class="field">
        <label>Mô tả bài giảng</label>
        <textarea name="desciption"></textarea>
        @if ($errors->has('desciption'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('desciption') }}</strong>
            </span>
        @endif
    </div>
    <div class="field">
        <div class="fields">
            <div class="two field">
                <label>Link bài giảng</label>
                <input type="text" name="start_date" placeholder="">
                @if ($errors->has('start_date'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('start_date') }}</strong>
                  </span>
                @endif
            </div>
            <div class="two field">
                <label>Link bài tập</label>
                <input type="text" name="stop_date" placeholder="">
                @if ($errors->has('stop_date'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('stop_date') }}</strong>
                  </span>
                @endif
            </div>
            <div class="two field">
                <label>Link youtube</label>
                <input type="text" name="stop_date" placeholder="">
                @if ($errors->has('stop_date'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('stop_date') }}</strong>
                  </span>
                @endif
            </div>
        </div>
    </div>
    <h4 class="ui dividing header">Thông tin khác</h4>
    <div class="fields">
        <div class="seven wide field">
            <label>Ngày bắt đầu</label>
            <input type="text" name="tags">
            @if ($errors->has('tags'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('tags') }}</strong>
                  </span>
            @endif
        </div>
    </div>
    <div class="fields">
        <div class="seven wide field">
            <label>Hạn nộp bài</label>
            <input type="text" name="price">
            @if ($errors->has('price'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
            @endif
        </div>
    </div>
    
    <button type="submit" class="ui button" tabindex="0">Tạo</button>
</form>
@endsection

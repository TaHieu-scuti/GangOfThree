@extends('layouts.default')

@section('content')
<form class="ui form">
    <h4 class="ui dividing header">Đăng ký lớp học mới</h4>
    <div class="field">
        <label>Tên lớp học</label>
        <div class="two fields">
            <div class="field">
                <input type="text" name="name" placeholder="">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
            </div>
        </div>
    </div>
    <div class="field">
        <label>Mô tả lớp học</label>
        <textarea name="description"></textarea>
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
    <div class="field">
        <div class="fields">
            <div class="two field">
                <label>Ngày bắt đầu</label>
                <input type="text" name="start_date" placeholder="">
            </div>
            <div class="two field">
                <label>Ngày kết thúc</label>
                <input type="text" name="stop_date" placeholder="">
            </div>
            @if ($errors->has('start_date'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('start_date') }}</strong>
                  </span>
            @endif
            @if ($errors->has('stop_date'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('stop_date') }}</strong>
                  </span>
            @endif
        </div>
    </div>
    <h4 class="ui dividing header">Thông tin khác</h4>
    <div class="fields">
        <div class="seven wide field">
            <label>Tags</label>
            <input type="text" name="tags" placeholder="PHP,Laravel,...">
            @if ($errors->has('tags'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('tags') }}</strong>
                  </span>
            @endif
        </div>
    </div>
    <div class="fields">
        <div class="seven wide field">
            <label>Học phí</label>
            <input type="text" name="price">
            @if ($errors->has('price'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
            @endif
        </div>
    </div>
    
    <div class="ui button" tabindex="0">Đăng ký</div>
</form>
@endsection

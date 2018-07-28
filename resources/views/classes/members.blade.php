<table class="ui celled fixed  table">
  <thead>
    <th>Danh sách học viên</th>
  </thead>
  <tbody>
    @if ($student->count() > 0)
      @foreach($student as $value)
        <tr>
          <td>
            <div class="item">
              <img class="ui avatar image" src="{{ asset('images/avatars/'. $value->user->avatar) }}">
              <span>{{$value->user->fullname}}</span>
            </div>
          </td>
        </tr>
      @endforeach
    @endif
    <tr>
      <td>
        <div class="item">
          <button class="ui labeled icon button primary" onclick="addMember()">
            <i class="plus icon"></i>
            Thêm học viên mới
          </button>
        </div>
      </td>
    </tr>
  </tbody>
</table>
@include('classes.modal_add_member')
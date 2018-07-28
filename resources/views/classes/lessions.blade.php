<table class="ui celled fixed  table">
  <thead>
    <th>Danh sách bài giảng</th>
  </thead>
  <tbody>
    @if($lessions->count() > 0)
    @foreach($lessions as $lession)
      <tr>
        <td>
          <div class="item">
            <h4 clas="ui header">{{ $lession->name }}</h4>
            <span>{{ $lession->descprition }}</span>
            <div class="ui container">
              <button class="ui left compact icon button"><i class="edit icon"></i></button>
              <button class="right compact ui icon button"><i class="remove icon"></i></button>
            </div>
          </div>
        </td>
      </tr>
    @endforeach
    @endif
    <tr>
      <td>
        <div class="item">
          <button class="ui labeled icon button">
            <i class="plus icon"></i>
            <a href=" {{ route('create-lession') }}">Thêm bài giảng mới</a>
          </button>
        </div>
      </td>
    </tr>
  </tbody>
</table>
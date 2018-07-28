<table class="ui celled fixed  table">
  <thead>
    <th>Danh sách bài giảng</th>
  </thead>
  <tbody>
    @if($lessions->count() > 0)
    <tr>
      <td>
        <div class="item">
          <h4 clas="ui header">{{ $lessions->name }}</h4>
          <span>{{ $lessions->descprition }}</span>
          <div class="ui container">
            <button class="ui left compact icon button"><i class="edit icon"></i></button>
            <button class="right compact ui icon button"><i class="remove icon"></i></button>
          </div>
        </div>
      </td>
    </tr>
    @endif
    <tr>
      <td>
        <div class="item">
          <button class="ui labeled icon button primary">
            <i class="plus icon"></i>
            Thêm bài giảng mới
          </button>
        </div>
      </td>
    </tr>
  </tbody>
</table>
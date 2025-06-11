<h2>Danh sách lịch lái thử</h2>
<table border="1" cellpadding="10" cellspacing="0">
  <thead>
    <tr>
      <th>Họ tên</th>
      <th>Điện thoại</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Mẫu xe</th>
      <th>Thời gian</th>
    </tr>
  </thead>
  <tbody>
    @foreach($list as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>{{ $item->phone }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->address }}</td>
      <td>{{ $item->car_model }}</td>
      <td>{{ $item->test_drive_time }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

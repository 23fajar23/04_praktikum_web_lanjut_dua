<div class="table-responsive">
  <table border="1" cellspacing="3" cellpadding="2" align="center">
    <thead>
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Message</strong></th>
      </tr>
    </thead>

    @foreach($messages as $key => $data)
    <tbody>
      <tr>
        <th>{{$data->id}}</th>
        <th>{{$data->name}}</th>
        <th>{{$data->email}}</th>
        <th>{{$data->message}}</th>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
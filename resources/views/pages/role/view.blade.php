<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Version</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($roles as $role)
      <tr>
        <td>{{$role->name}}</td>
        <td>{{$role->version}}</td>
        <td><a href = "/role/edit/{{$role->id}}">Edit Role</a></td>
        <td><a href = "/role/delete/{{$role->id}}">Delete Role</a></td>
      </tr>
      @endforeach
      </tbody>
  </table>
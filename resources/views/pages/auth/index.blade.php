<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Icon</th>
        <th>Parent ID</th>
        <th>Path</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($auths as $auth)
      <tr>
        <td>{{$auth->name}}</td>
        <td>{{$auth->icon}}</td>
        <td>{{$auth->parent_id}}</td>
        <td>{{$auth->path}}</td>
        <td><a href = "/auth/edit/{{$auth->id}}">Edit Authorization Role</a></td>
        <td><button>Edit Role</button></td>
        <td><a href = "/auth/delete/{{$auth->id}}">Delete Role</a></td>
      </tr>
      @endforeach
      </tbody>
  </table>
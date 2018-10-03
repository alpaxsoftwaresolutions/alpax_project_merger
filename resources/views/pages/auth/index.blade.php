@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>Modules</h3>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <button class="btn btn-primary float-right" title="Add Module" data-toggle="modal" data-target="#m_create_module"><i class="fa fa-plus"></i> Add Module</button>
      </div>
    </div>
    <hr>
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
    <table id="auth_table" class="table" style="width: 100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Role</th>
          <th>Icon</th>
          <th>Parent ID</th>
          <th>Path</th>
          <th>Order</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($auths as $auth)
        <tr>
          <td>{{$auth->name}}</td>
          <td> {{$auth->name2}}</td>
          <td>{{$auth->icon}}</td>
          <td>{{$auth->parent_id}}</td>
          <td>{{$auth->path}}</td>
          <td>{{$auth->order_id}}</td>
          <td>
            <button class="btn btn-sm btn-primary open-edit" {{-- href = "/auth/edit/{{$auth->id}}" --}} title="Edit Authorization Role" data-toggle="modal" data-target="#m_edit_module" data-id = "{{$auth->id}}"  data-name = "{{$auth->name}}" data-oder = "{{$auth->order_id}}" data-icon = "{{$auth->icon}}" data-path = "{{$auth->path}}"><i class="fa fa-users-cog"></i></button>
            <a class="btn btn-sm btn-primary" href = "/authItems/edit/{{$auth->id}}" title="Edit Authorization Permission"><i class="fa fa-user-lock"></i></a>
            <a class="btn btn-sm btn-danger" href = "/auth/delete/{{$auth->id}}" title="Delete Module"><i class="fa fa-minus"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

<!-- Create Modal -->
<div class="modal fade" id="m_create_module" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Create Module</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

            <form action="{{route('store.authentications')}}" method="post" role="form">
              {{csrf_field()}}

              <div class="form-group">
                <label for="auth_name">Name</label>
                <input type="text" class="form-control textboxes" name="auth_name" id="auth_name" value="{{ old('auth_name') }}">
              </div>
              <div class="form-group">
                <label for="auth_order">Order ID</label>
                <input type="number" class="form-control textboxes" name="auth_order" id="auth_order" value="{{ old('auth_order') }}">
              </div>
              <div class="form-group">
                <label for="auth_icon">Icon</label>
                <input type="text" class="form-control textboxes" name="auth_icon" id="auth_icon" value="{{ old('auth_icon') }}">
              </div>
              <div class="form-group">
                <select id = "auth_parent" name = "auth_parent" class="select2" style="width: 100%">
                  <option value = "0">No Parent</option>
                  @foreach($auths as $auth)
                  <option value = "{{$auth->id}}">{{$auth->name}}</option>
                  @endforeach
                </select>
                <div class="form-group mt-2">
                  <label for="auth_path">Path</label>
                  <input type="text" class="form-control textboxes" name="auth_path" id="auth_path" value="{{ old('auth_path') }}">
                </div>

              </div>

            </div>
          </div>

        </div>

        <div class="modal-footer">

          <button class="btn btn-primary">Submit</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Create Modal -->

<!-- Edit Authorization Modal -->
<div class="modal fade" id="m_edit_module" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit Authorization</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

            <form action="{{route('store.authentications')}}" method="post" role="form">
              {{csrf_field()}}
            <div class="form-group d-none">
                <label for="auth_id">ID</label>
                <input type="text" class="form-control textboxes" name="auth_id" id="auth_id" >
              </div>
              <div class="form-group">
                <label for="auth_name_edit">Name</label>
                <input type="text" class="form-control textboxes" name="auth_name_edit" id="auth_name_edit" >
              </div>
              <div class="form-group">
                <label for="auth_order_edit">Order ID</label>
                <input type="number" class="form-control textboxes" name="auth_order_edit" id="auth_order_edit" >
              </div>
              <div class="form-group">
                <label for="authauth_icon_edit_icon">Icon</label>
                <input type="text" class="form-control textboxes" name="auth_icon_edit" id="auth_icon_edit" >
              </div>
              <div class="form-group">
                <select id = "auth_parent_edit" name = "auth_parent_edit" class="select2" style="width: 100%">
                  <option value = "0">No Parent</option>
                  @foreach($auths as $auth)
                  <option value = "{{$auth->id}}">{{$auth->name}}</option>
                  @endforeach
                </select>
                <div class="form-group mt-2">
                  <label for="auth_path">Path</label>
                  <input type="text" class="form-control textboxes" name="auth_path_edit" id="auth_path_edit">
                </div>

              </div>

            </div>
          </div>

        </div>

        <div class="modal-footer">

          <button class="btn btn-primary">Save</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit Authorization Modal -->


<script type="text/javascript">
  $("#auth_table").DataTable();
  $("#auth_parent").select2();
</script>
<script>
$(document).on("click", ".open-edit", function () {
     var myauthId = $(this).data('id');
     var myauthOrder = $(this).data('order');
     var myauthIcon = $(this).data('icon');
     var myauthPath = $(this).data('path');
     var myauthName = $(this).data('name');
     $(".modal-body #auth_id").val( myauthId );
     $(".modal-body #auth_name_edit").val( myauthName );
     $(".modal-body #auth_order_edit").val( myauthOrder );
     $(".modal-body #auth_icon_edit").val( myauthIcon );
     $(".modal-body #auth_path_edit").val( myauthPath );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>
@endsection
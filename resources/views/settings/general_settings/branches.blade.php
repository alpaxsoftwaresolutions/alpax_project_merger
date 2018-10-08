@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>Branch</h3>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <button class="btn btn-primary float-right" title="Add Branch" data-toggle="modal" data-target="#m_create_branch"><i class="fa fa-plus"></i> Add Branch</button>
      </div>
    </div>
    <hr>
  </div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
    <table id="branch_table" class="table" style="width: 100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Code</th>
          <th>Company Name</th> 
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
        @foreach($branch as $branchs)
        <tr>
          <td>{{$branchs->name}}</td>
          <td> {{$branchs->code}}</td>
          <td>{{$branchs->name2}}</td>
          <td>
            <button class="btn btn-sm btn-primary open-edit"  title="Edit Branch" 
            data-toggle="modal" 
            data-target="#m_edit_branch"
            data-id = "{{$branchs->id}}"
            data-name = "{{$branchs->name}}"
            data-code = "{{$branchs->code}}"><i class="fa fa-users-cog"></i></button>
            <a class="btn btn-sm btn-danger" href = "/branch/delete/{{$branchs->id}}" title="Delete Module"><i class="fa fa-minus"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

  <!-- Create Modal -->
<div class="modal fade" id="m_create_branch" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Create Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

            <form action="{{route('store.branch')}}" method="post" role="form">
              {{csrf_field()}}

              <div class="form-group">
                <label for="branch_name">Name</label>
                <input type="text" class="form-control textboxes" name="branch_name" id="branch_name" value="{{ old('branch_name') }}">
              </div>
              <div class="form-group">
                <label for="branch_code">CODE</label>
                <input type="text" class="form-control textboxes" name="branch_code" max = "4" id="branch_code" value="{{ old('branch_code') }}">
              </div>
              <div class="form-group">
                <select id = "company_id" name = "company_id" class="select2" style="width: 100%">
                  @foreach($company as $cmp)
                  <option value = "{{$cmp->id}}">{{$cmp->name}}</option>
                  @endforeach
                </select>

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

<!-- Edit Modal -->
<div class="modal fade" id="m_edit_branch" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

            <form action="{{route('store.branch')}}" method="post" role="form">
              {{csrf_field()}}
              <div class="form-group">
                <label for="branch_id_edit">ID</label>
                <input type="text" class="form-control textboxes" name="branch_id_edit" id="branch_id_edit">
              </div>
              <div class="form-group">
                <label for="branch_name_edit">Name</label>
                <input type="text" class="form-control textboxes" name="branch_name_edit" id="branch_name_edit" >
              </div>
              <div class="form-group">
                <label for="branch_code_edit">CODE</label>
                <input type="text" class="form-control textboxes" name="branch_code_edit" max = "4" id="branch_code_edit">
              </div>
              <div class="form-group">
                <select id = "company_id_edit" name = "company_id_edit" class="select2" style="width: 100%">
                  @foreach($company as $cmp)
                  <option value = "{{$cmp->id}}">{{$cmp->name}}</option>
                  @endforeach
                </select>

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
<!-- Edit Modal -->
<script type="text/javascript">
  $("#branch_table").DataTable();
  $("#company_id").select2();
</script>
<script>
$(document).on("click", ".open-edit", function () {
     var myauthId = $(this).data('id');
     var myauthOrder = $(this).data('name');
     var myauthPath = $(this).data('code');

     $(".modal-body #branch_id_edit").val( myauthId );
     $(".modal-body #branch_name_edit").val( myauthOrder );
     $(".modal-body #branch_code_edit").val( myauthPath );

     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>
@endsection
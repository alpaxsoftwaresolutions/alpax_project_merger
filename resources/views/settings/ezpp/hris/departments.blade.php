@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Departments</h3></strong>
				<button class="btn btn-primary" title="Add Department" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
		<table id="department_table" class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Code</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
				@foreach($department as $departments)
				<tr>
					<td>{{$departments->name}}</td>
					<td>{{$departments->description}}</td>
					<td>
						<button class="btn btn-primary btn-sm open-edit-dept" data-toggle="modal" data-target="#m_edit"
						data-id = "{{$departments->id}}"
						data-code = "{{$departments->name}}"
						data-description = "{{$departments->description}}"><i class="fa fa-edit"></i></button>
						<button class="btn btn-danger btn-sm open-delete-dept" data-toggle="modal" data-target="#m_delete" data-id = "{{$departments->id}}"><i class="fa fa-trash-alt"></i></button></th>
					</td>
				@endforeach
			</thead>
		</table>

		
	</div>

</div>

<!-- Create Department Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Department</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.department')}}" method = "post" id = "form-department">
				{{csrf_field()}}
			<div class="modal-body">
				<div class="row">

					<div class="col-md-12 col-xs-12">
						<div class="form-group">
							<label>Code</label>
							<input type="text" class="form-control" name="code">
						</div>
					</div>

					<div class="col-md-12 col-xs-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="description"></textarea>
						</div>
					</div>

				</div>
			</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-primary" id = "create-submit">Submit</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- Create Department Modal -->

<!-- edit Department Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Department</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.department')}}" method = "post" id = "form-department_edit">
			{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="form-group d-none">
								<label>ID</label>
								<input type="text" class="form-control" name="department_id_edit" id="department_id_edit">
							</div>
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" name="department_code_edit" id="department_code_edit">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="department_description_edit"  id="department_description_edit"></textarea>
							</div>
						</div>

					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-primary" id = "edit-submit">Save</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- edit Department Modal -->

<!-- delete Department Modal -->
<div class="modal fade" id="m_delete" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Delete Department</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('delete.department')}}" method = "post" id = "form-department_delete">
			{{csrf_field()}}
			<div class="modal-body">
					<div class="col-md-12 col-xs-12">
						<div class="form-group">
							<label>ID</label>
							<input type="text" class="form-control" name="department_id_delete" id="department_id_delete">
						</div>
					</div>
					<div class="row">

						<div class="col-lg-12 text-center">
							<p class="">Are you sure you want to delete this?</p>
						</div>

					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-danger" id = "delete-submit">Yes</button>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>
<!-- delete Department Modal -->

<script type="text/javascript">
	$("#department_table").DataTable({
		responsive: true
	});
	$("#create-submit").on("click", function(){
		$("#form-department").submit();
	});
	$("#edit-submit").on("click", function(){
		$("#form-department_edit").submit();
	});
	$("#delete-submit").on("click", function(){
		$("#form-department_delete").submit();
	});
	$(document).on("click", ".open-edit-dept", function () {
	     var myroleId = $(this).data('id');
	     var code = $(this).data('code');
	     var description = $(this).data('description');
	     $(".modal-body #department_id_edit").val( myroleId );  
	     $(".modal-body #department_code_edit").val( code ); 
	     $(".modal-body #department_description_edit").val( description ); 
	});
	$(document).on("click", ".open-delete-dept", function () {
	     var myroleId = $(this).data('id'); 
	     $(".modal-body #department_id_delete").val( myroleId );  

	});
</script>
@endsection
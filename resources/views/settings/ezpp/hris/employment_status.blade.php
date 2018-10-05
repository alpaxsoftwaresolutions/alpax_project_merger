@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Employment Status</h3></strong>
				<button class="btn btn-primary float-right" title="Add Module" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xs-12 mt-2 mb-2">
		<table class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Code</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
				@foreach ($status as $empstatus)
				<tr>
					<td>{{$empstatus->code}}</td>
					<td>{{$empstatus->description}}</td>
					<td>
						<button class="btn btn-primary btn-sm open-edit-es" 
						data-id = "{{$empstatus->id}}" 
						data-code= "{{$empstatus->code}}"
						data-description= "{{$empstatus->description}}"
						data-toggle="modal" 
						data-target="#m_edit"><i class="fa fa-edit"></i></button>
						<button class="btn btn-danger btn-sm open-delete-es" data-id = "{{$empstatus->id}}" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
					</td>
				</tr>
				@endforeach
			</thead>
		</table>

		
	</div>
</div>

<!-- Create Employement Status Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Employement Status</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.empstatus')}}" method = "post" id = "es_form">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" name="es_code" id = "es_code">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="es_description" id = "es_description"></textarea>
							</div>
						</div>

					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-primary" id = "create_es">Submit</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- Create Employement Status Modal -->

<!-- edit Department Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			
				<div class="modal-header">
					<h5 class="modal-title">Edit Employement Status</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<form action = "{{route('store.empstatus')}}" method = "post" id = "es_form_edit">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="es_id_edit" id = "es_id_edit">
							</div>
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" name="es_code_edit" id = "es_code_edit">
							</div>
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="es_description" id = "es_description"></textarea>
							</div>
						</div>

					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-primary" id = "submit_edit_es">Save</button>
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
				<h5 class="modal-title">Delete Employment Status</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('delete.empstatus')}}" method = "post" id = "es_form_delete">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="es_id_delete" id = "es_id_delete">
							</div>
						</div>
						<div class="col-lg-12 text-center">
							<p class="">Are you sure you want to delete this?</p>
						</div>
					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-danger" id = "submit_delete_es">Yes</button>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>
<!-- delete Department Modal -->

<script type="text/javascript">
	$(".table").DataTable();
	$("#create_es").on("click", function(){
		$("#es_form").submit();
	});
	$("#submit_delete_es").on("click", function(){
		$("#es_form_delete").submit();
	});
	$("#submit_edit_es").on("click", function(){
		$("#es_form_edit").submit();
	});
	$(document).on("click", ".open-delete-es", function () {
	     var myroleId = $(this).data('id');
	     $(".modal-body #es_id_delete").val( myroleId );  
	});
	$(document).on("click", ".open-edit-es", function () {
	     var myroleId = $(this).data('id');
	     var code = $(this).data('code');
	     var description = $(this).data('description');
	     $(".modal-body #es_id_edit").val( myroleId );  
	     $(".modal-body #es_code_edit").val( code ); 
	     $(".modal-body #es_description").val( description ); 
	});
</script>

@endsection
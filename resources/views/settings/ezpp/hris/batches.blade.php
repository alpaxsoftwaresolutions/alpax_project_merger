@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Batch</h3></strong>
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Actions</th>
				</tr>
				@foreach($batch as $batches)
				<tr>
					<td>{{$batches->name}}</td>
					<td>
						<button class="btn btn-primary btn-sm open-edit-batch" data-toggle="modal" data-target="#m_edit"
						data-id = "{{$batches->id}}" data-name = "{{$batches->name}}" data-description = "{{$batches->description}}" title="Edit Batches"><i class="fa fa-eye"></i></button>
						<button class="btn btn-danger btn-sm open-delete-batch" data-id = "{{$batches->id}}" data-toggle="modal" data-target="#m_delete_batch"><i class="fa fa-trash-alt"></i></button>	
					</td>
				</tr>
				@endforeach
			</thead>
		</table>

		
	</div>

</div>

<!-- Create Batch Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Add Batch</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.batch')}}" method = "post" id = "form-add">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" id="code_view" name="code_view">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" id="description_view" name="description_view"></textarea>
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
<!-- Create Batch Modal -->

<!-- Edit Batch Modal -->
<div class="modal fade" id="m_edit" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Batch</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.batch')}}" method = "post" id = "form-edit">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 col-xs-12 d-none">
							<div class="form-group">
								<label for="batches_id_delete">ID</label>
								<input type="hidden" class="form-control textboxes" name="batches_id_edit" id="batches_id_edit" value="">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" id="code_edit" name="code_edit">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" id="description_edit" name="description_edit"></textarea>
							</div>
						</div>

					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-primary" id = "edit-submit">Submit</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- Edit Batch Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="m_delete_batch" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Delete Batch</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form action = "{{route('delete.batch')}}" method = "post" id = "delete_batches">
				{{csrf_field()}}

				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 col-xs-12 d-none">
							<div class="form-group">
								<label for="batches_id_delete">ID</label>
								<input type="text" class="form-control textboxes" name="batches_id_delete" id="batches_id_delete">
							</div>
						</div>

						<div class="col-lg-12 text-center">
							<p class="">Are you sure you want to delete this?</p>
						</div>

					</div>
				</div>
			</form>

			<div class="modal-footer">
				<button class="btn btn-danger" type="submit" id = "submit_delete_batches">Yes</button>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>
<!-- Delete Modal -->



<script>
	$("#create-submit").on("click", function(){
		$("#form-add").submit();
	});
	$("#edit-submit").on("click", function(){
		$("#form-edit").submit();
	});
	$("#submit_delete_batches").on("click", function(){
		$("#delete_batches").submit();
	});
	$(document).on("click", ".open-edit-batch", function () {
	     var myroleId = $(this).data('id');
	     var code = $(this).data('name');
	     var description = $(this).data('description');
	     $(".modal-body #batches_id_edit").val( myroleId );  
	     $(".modal-body #code_edit").val( code ); 
	     $(".modal-body #description_edit").val( description ); 
	});
	$(document).on("click", ".open-delete-batch", function () {
	     var myroleId = $(this).data('id'); 
	     $(".modal-body #batches_id_delete").val( myroleId );  

	});
</script>
@endsection
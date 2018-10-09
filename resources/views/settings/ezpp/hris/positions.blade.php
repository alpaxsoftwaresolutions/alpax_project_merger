@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Position</h3></strong>
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add</button>
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
				@foreach ($position as $positions)
				<tr>
					<td>{{$positions->code}}</td>
					<td>{{$positions->description}}</td>
					<td>
						<button class="btn btn-primary btn-sm open-edit-position" 
						data-id = "{{$positions->id}}" 
						data-code = "{{$positions->code}}"
						data-description = "{{$positions->description}}"
						data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
						<button class="btn btn-danger btn-sm open-delete-position" data-toggle="modal" data-target="#m_delete" data-id = "{{$positions->id}}"><i class="fa fa-trash-alt"></i></button>
					</td>
				</tr>
				@endforeach
			</thead>
		</table>

		
	</div>

</div>

<!-- Create profit_center Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Position</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.position')}}" method = "post" id = "form_create">
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
				<button class="btn btn-primary" id = "submit_create">Submit</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- Create profit_center Modal -->

<!-- edit profit_center Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Position</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('store.position')}}" method = "post" id = "form_edit">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>ID</label>
								<input type="hidden" class="form-control" name="id_edit"  id="id_edit">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" name="code_edit"  id="code_edit">
							</div>
						</div>

						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="description_edit"  id="description_edit"></textarea>
							</div>
						</div>

					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-primary" id = "submit_edit">Save</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- edit position Modal -->
<!-- delete position Modal -->
<div class="modal fade" id="m_delete" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Delete Employment Status</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action = "{{route('delete.position')}}" method = "post" id = "form_delete">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 col-xs-12 d-hide">
							<div class="form-group">
								<label>ID</label>
								<input type="hidden" class="form-control" name="id_delete" id = "id_delete">
							</div>
						</div>
						<div class="col-lg-12 text-center">
							<p class="">Are you sure you want to delete this?</p>
						</div>
					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button class="btn btn-danger" id = "submit_delete">Yes</button>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>
<!-- delete position Modal -->
<script type="text/javascript">
	$(".table").DataTable();
	$("#submit_create").on("click", function(){
		$("#form_create").submit();
	});
	$("#submit_delete").on("click", function(){
		$("#form_delete").submit();
	});
	$("#submit_edit").on("click", function(){
		$("#form_edit").submit();
	});
	$("select[name='gl_account']").select2();
	$(document).on("click", ".open-delete-position", function () {
	     var myroleId = $(this).data('id');
	     $(".modal-body #id_delete").val( myroleId );  
	});
	$(document).on("click", ".open-edit-position", function () {
	     var myroleId = $(this).data('id');
	     var code = $(this).data('code');
	     var description = $(this).data('description');
	     $(".modal-body #id_edit").val( myroleId );  
	     $(".modal-body #code_edit").val( code ); 
	     $(".modal-body #description_edit").val( description ); 
	});
</script>
@endsection
@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Message Board</h3></strong>
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Target Date</th>
					<th>Active</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>

		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
		<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
	</div>

</div>

<!-- Create profit_center Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-4 col-md-4 col-xs-4">
						<div class="row">
							
							<div class="col-lg-12 col-xs-12">
								<div class="form-group">
									<label>Upload Picture</label>
									
									<input id="picture" type="file" class="form-control-file" name="picture">
								</div>
							</div>

							<div class="col-lg-12 col-xs-12">
								<div class="form-group">
									<img src="#" alt="Your Image" id="image" style="width: 100%">
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-8 col-md-8 col-xs-8">
						<div class="row">

							<div class="col-lg-12 col-xs-12">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="title">
								</div>
							</div>

							<div class="col-lg-12 col-xs-12">
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="description"></textarea>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary">Submit</button>
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
				<h5 class="modal-title">Edit Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

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
							<textarea type="text" name="description"></textarea>
						</div>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary">Save</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- edit profit_center Modal -->

<script type="text/javascript">
	$(".table").DataTable();
	$("select[name='gl_account']").select2();

	$("#picture").on("change", function(){
		readURL(this);
	});

	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#image').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>

<script type= "text/javascript">
	tinymce.init({
		selector: 'textarea',
		theme: 'modern',
		plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
		toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],
		content_css: [
		'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		'//www.tinymce.com/css/codepen.min.css'
		]
	});
</script>
@endsection
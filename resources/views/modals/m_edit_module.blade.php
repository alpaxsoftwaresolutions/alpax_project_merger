<!-- Modal -->
<div class="modal fade" id="m_edit_module" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
		<div class="modal-content">

			<div class="modal-body" style="background-color: #fbfbfb;">
				<div class="row">

					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
						<div class="d-flex">
							<div>
								<h4 class="text-dark">Edit Module</h4>
							</div>
							<div class="ml-auto">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true" class="text-danger">&times;</span>
								</button>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
						@foreach($auths_edit as $authr)
						<form action="" method="post" role="form">
							{{csrf_field()}}

							<div class="form-group">
								<label for="auth_name_edit"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
								<input type="text" class="form-control textboxes" name="auth_name_edit" id="auth_name_edit" value="{{ $authr->name }}">
							</div>
							<div class="form-group">
								<label for="auth_order_edit"><i class="fa fa-id-badge" aria-hidden="true"></i>Order ID</label>
								<input type="number" class="form-control textboxes" name="auth_order_edit" id="auth_order_edit" value="{{ $authr->order_id }}">
							</div>
							<div class="form-group">
								<label for="auth_icon_edit"><i class="fa fa-id-badge" aria-hidden="true"></i>Icon</label>
								<input type="text" class="form-control textboxes" name="auth_icon_edit" id="auth_icon_edit" value="{{ $authr->icon }}">
							</div>
							<div class="form-group">
								<select id = "auth_parent_edit" name = "auth_parent_edit" class="form-control textboxes">
									<option value = "0">No Parent</option>
									@foreach($auths as $auth)
									<option value = "{{$auth->id}}">{{$auth->name}}</option>
									@endforeach
								</select>
								<div class="form-group">
									<label for="auth_path_edit"><i class="fa fa-id-badge" aria-hidden="true"></i>Path</label>
									<input type="text" class="form-control textboxes" name="auth_path_edit" id="auth_path_edit" value="{{ $authr->path}}">
								</div>
							</div>
							<button>Submit</button>
						</form>
						@endforeach
					</div>

				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	$("#auth_parent_edit").select2();
</script>
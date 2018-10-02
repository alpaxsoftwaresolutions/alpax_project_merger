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
        <button>Submit</button>
    </form>
    @endforeach
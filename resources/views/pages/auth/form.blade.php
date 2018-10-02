
 <form action="{{route('store.authentications')}}" method="post" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <label for="auth_name"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
            <input type="text" class="form-control textboxes" name="auth_name" id="auth_name" value="{{ old('auth_name') }}">
        </div>
        <div class="form-group">
            <label for="auth_order"><i class="fa fa-id-badge" aria-hidden="true"></i>Order ID</label>
            <input type="number" class="form-control textboxes" name="auth_order" id="auth_order" value="{{ old('auth_order') }}">
        </div>
        <div class="form-group">
            <label for="auth_icon"><i class="fa fa-id-badge" aria-hidden="true"></i>Icon</label>
            <input type="text" class="form-control textboxes" name="auth_icon" id="auth_icon" value="{{ old('auth_icon') }}">
        </div>
        <div class="form-group">
        	<select id = "auth_parent" name = "auth_parent" class="form-control textboxes">
        			<option value = "0">Main Module</option>
        		@foreach(json_decode($authss) as $auth)
        			<option value = "{{$auth->id}}">{{$auth->name}}</option>
        		@endforeach
        	</select>
        <div class="form-group">
            <label for="auth_path"><i class="fa fa-id-badge" aria-hidden="true"></i>Path</label>
            <input type="text" class="form-control textboxes" name="auth_icon" id="auth_path" value="{{ old('auth_path') }}">
        </div>
        <button>Submit</button>
    </form>
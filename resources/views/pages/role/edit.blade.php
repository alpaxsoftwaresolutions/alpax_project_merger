@extends('layouts.app')

@section('content')

<form action="" method="post" role="form">
    {{csrf_field()}}
     <div class="form-group">
        <label for="role_name_edit"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
         @foreach($role as $roles)
        	<input type="text" class="form-control textboxes" name="role_name_edit" id="role_name_edit" value = "{{$roles->name}}">
        @endforeach
    </div>
    <button>Save</button>
</form>

@endsection
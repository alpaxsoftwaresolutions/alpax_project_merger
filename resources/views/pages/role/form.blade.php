<form action="" method="post" role="form">
    {{csrf_field()}}
     <div class="form-group">
        <label for="role_name"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
        <input type="text" class="form-control textboxes" name="role_name" id="role_name"">
    </div>
    <button>Save</button>
</form>
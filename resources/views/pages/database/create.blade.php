<form action="" method="post" role="form">
    {{csrf_field()}}
     <div class="form-group">
        <label for="database_name"><i class="fa fa-id-badge" aria-hidden="true"></i>table Name</label>
        <input type="text" class="form-control textboxes" name="database_name" id="database_name">
    </div>
    <div class="form-group">
        <label for="column1"><i class="fa fa-id-badge" aria-hidden="true"></i>Column 1</label>
        <input type="text" class="form-control textboxes" name="column1" id="column1">
    </div>
    <div class="form-group">
        <label for="column2"><i class="fa fa-id-badge" aria-hidden="true"></i>>Column 2</label>
        <input type="text" class="form-control textboxes" name="column2" id="column2">
    </div>
    <div class="form-group">
        <label for="column3"><i class="fa fa-id-badge" aria-hidden="true"></i>>Column 3</label>
        <input type="text" class="form-control textboxes" name="column3" id="column3">
    </div>
    <button>Save</button>
</form>
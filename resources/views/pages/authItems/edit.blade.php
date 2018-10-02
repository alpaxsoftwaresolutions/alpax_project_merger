 <form action="" method="post" role="form">
    {{csrf_field()}}
    @foreach($authItems as $authitems)
    <h1>{{$authitems->name}}</h1>
    @if($authitems->isVisible == 1)
	<input type="checkbox" name="visible" value="1" checked>Visible
	@else
	<input type="checkbox" name="visible" value="1" >Visible
	@endif
	@if($authitems->isReadable == 1)
	<input type="checkbox" name="readable" value="1" checked> Readable
	@else
	<input type="checkbox" name="readable" value="1" > Readable
	@endif
	@if($authitems->isWritable == 1)
	<input type="checkbox" name="writable" value="1" checked>Writable <br> <br>
	@else
	<input type="checkbox" name="writable" value="1" >Writable <br> <br>
	@endif
	@endforeach 
	<button>Update</button>
</form> 

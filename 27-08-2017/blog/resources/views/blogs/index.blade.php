@extends("layout.master")

@section("content")
<ul>
<?php 
// if(empty($blogs))
// {
	
// }
@if(!empty($blogs))
	@foreach($blogs as $blog)
		<li>{{ $blog }}</li>
	@endforeach
@endif
</ul>
@endsection
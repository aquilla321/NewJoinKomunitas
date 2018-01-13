@extends('layouts.app')

@section('content')



<div class="container filler">
	@foreach($komunitas as $k)
		<div class="container-fluid komunitas-dalem">
			<img class="logo_kom" src="{{$k->image_path}}">
			<a href="/kategori/search/{{$k->id}}">	<h3>{{$k->komunitas_name}}</h3>	</a>	
		</div>		
	@endforeach
</div>

@endsection
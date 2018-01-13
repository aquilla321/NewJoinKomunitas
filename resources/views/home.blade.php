@extends('layouts.app')

@section('content')



<div class="container filler home-page">
	<form method="get" action="/kategori/search">
		<div class="container filler-inside">
			<img class="logo-besar" src="/image/joinkomunitas.png">
			<h1 class="title">Masukan Kategori Yang Ingin Kamu Cari</h1>
			<div class="picker-body">
				<select class="category-picker" name="kategori_list">
					@foreach($category as $c)
					<option value="{{$c->id}}">
						{{$c->kategori_name}}
					</option>
					@endforeach
				</select>
			</div>

		</div>
		
		<div class="container filler-bottom">
			
			<input class="find-button" type="submit" name="submit" value="Cari Komunitas">		
		</div>
	</form>

</div>

@endsection
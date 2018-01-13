@extends('layouts.app')

@section('content')

<div class="container filler frame">
	<form action = "inputKategorinya" method = "post" enctype="multipart/form-data">
		{{csrf_field()}}
		<table class="table">
			<tr>
				<td>Nama Komunitas</td>
				<td> : </td>
				<td><input type="text" name="kategori_name"></td>
				<td><input type="submit" name="btnSubmit"></td>
			</tr>
		</table>
		
	</form>
	
</div>


@endsection
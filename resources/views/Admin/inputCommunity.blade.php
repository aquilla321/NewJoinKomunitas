@extends('layouts.app')

@section('content')



<div class="container filler frame">
	<form action="inputCommunity" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<table class="table">
			<tr>
				<td>Nama Komunitas</td>
				<td> : </td>
				<td><input class="input-table" type="text" name="komunitas_name" value="{{old('komunitas_name')}}"></td>
			</tr>
			<tr>	
				<td>Kategori</td>
				<td> : </td>
				<td>
						<select class="input-table" name="kategori_list" value="{{old('kategori_list')}}">
							@foreach($category as $c)
							<option value="{{$c->id}}">
								{{$c->kategori_name}}
							</option>
							@endforeach
						</select>
				</td>
			</tr>
			<tr>
				<td>Deskripsi Komunitas</td>
				<td> : </td>
				<td><textarea class="input-table" name="description">{{old('description')}}</textarea></td>
			</tr>
			<tr>
				<td>Lokasi Komunitas</td>
				<td> : </td>
				<td><input class="input-table" type="text" name="location" value="{{old('location')}}"></td>
			</tr>
			<tr>
				<td>Jumlah Member</td>
				<td> : </td>
				<td><input class="input-table" type="number" name="member" value="{{old('member')}}"></td>
			</tr>
			<tr>
				<td>Jumlah Slot Tersedia</td>
				<td> : </td>
				<td><input class="input-table" type="number" name="slot" value="{{old('slot')}}"></td>
			</tr>
			<tr>
				<td>Logo Komunitas</td>
				<td> : </td>
				<td><input class="input-table" type="file" name="image_path" value="{{old('image_path')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					@if ($errors->has('komunitas_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('komunitas_name') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('kategori_list'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kategori_list') }}</strong>
                        </span>
                    @endif    
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('location'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                    @endif
                    @if ($errors->has('member'))
                    <span class="help-block">
                        <strong>{{ $errors->first('member') }}</strong>
                    </span>
                    @endif
                    @if ($errors->has('slot'))
                    <span class="help-block">
                        <strong>{{ $errors->first('slot') }}</strong>
                    </span>
                    @endif
                    @if ($errors->has('image_path'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image_path') }}</strong>
                    </span>
                    @endif					
				</td>
			</tr>
		</table>		
	</form>	
</div>

@endsection
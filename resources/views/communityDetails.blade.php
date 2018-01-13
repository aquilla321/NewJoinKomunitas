@extends('layouts.communityDetails')

@section('content')



<div class="container filler com-details">
	<h1>{{$komunitas->komunitas_name}}</h1>
	<img class="logo_kom logo-detail" src="{{$komunitas->image_path}}">
	<h4>{{$komunitas->description}}</h4>
	<h4>Alamat : {{$komunitas->location}}</h4>
	<h4>Jumlah Member : {{$komunitas->member}}</h4>
	<h4>Slot tersedia : {{$komunitas->slot}}</h4>
	@if(Auth::guest())
		<a class="btnJoin" href="{{url('login')}}">Join</a>
	@else
		<a class="btn btn-info btn-lg btnJoin" data-toggle="modal" data-target="#myModal">Join</a>
	@endif

	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Join</button> -->

<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times</button>
	        <h4 class="modal-title">Confirmation</h4>
	      </div>
	      <div class="modal-body">
	        <p>Apakah Anda ingin mendaftar?</p>
	      </div>
	      <div class="modal-footer">
	        <a type="button" class="btn btn-default" href="/join/{{$komunitas->id}}">Yes</a>
	        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@endsection
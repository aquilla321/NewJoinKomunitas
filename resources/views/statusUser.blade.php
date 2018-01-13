@extends('layouts.app')

@section('content')



<div class="container filler frame">
	
	<table class = "table">
		<thead>
			<tr>
				<th>No</th>
				<th>User</th>
				<th>Email</th>
				<th>Komunitas</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach($transaction as $trans)
				<tr>
					<td>{{$index++}}</td>
					<td>{{$trans->user->name}}</td>
					<td>{{$trans->user->email}}</td>
					<td>{{$trans->komunitas->komunitas_name}}</td>
					<td>
						@if($trans->status == 0)
						Waiting
						@elseif($trans->status == 1)
						Accepted
						@else
						Rejected
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection
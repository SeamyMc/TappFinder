@extends('layouts.main')
@section('content')
	<br>
	<div class="row">
		<div class="col">
			<h1>
				{{$beer->name}}
			</h1>
		</div>

		<div class="row">
			<div class="col-12">
				<h2>
					Description:
				</h2>
				<p>
					{{$beer->brewery}}
					<br>
					{{$beer->description}}
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<img style="height:500px; width:100%; object-fit:cover;" src="{{$beer->image}}" class="img-fluid" alt="...">
			</div>
		</div>

	</div>
@endsection






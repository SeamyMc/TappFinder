@extends('layouts.main')
@section('content')

	<br>
	<br>
	<br>
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col-6 offset-3">
					<img style="max-width: 100%" src="/images/secondary-logo.png" alt="...">
				
				</div>
			</div>

			<div class="row">
				<div class="col col-10 offset-1">
					@include ('widgets.searchbar')		
				</div>
			</div>

			<div class="row">
				<div class="text-center col col-10 offset-1">
		
					<a href="{{route('pints.create')}}" type="submit" class="text-center btn btn-outline-secondary">Just had a pint? Tell us about it here!</a>
				</div>
			</div>

		</div>
	</div>


@endsection
@extends('layouts.main')
@section('content')

	<br>
	<br>
	<br>
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col col-4 offset-4">
					<div class="row">
						<div class="col-8 offset-2">
							<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.xhCfJGKousJdFna0rP0PkgHaHa%26pid%3DApi&f=1" class="img-fluid" alt="...">
						
						</div>
					</div>
					<div class="row text-center">
						<p class="fs-1">Tapp Finder</p>
					</div>
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
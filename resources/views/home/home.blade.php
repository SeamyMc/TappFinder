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
					
					@auth
						<a href="{{route('pints.create')}}" type="submit" class="text-center btn btn-outline-secondary">Just had a pint? Tell us about it here!</a>
					@else
						<a href="{{route('register')}}" type="submit" class="text-center btn btn-outline-secondary">Just had a pint? Register to tell us about it!</a>
					@endif
				</div>
			</div>

		</div>
	</div>


<script type="text/javascript">
		
		var homeApp = new Vue({
			el: '#home-app',
			data() {
				return {

				}
			},

			methods: {

				getLocation() {
				  if (navigator.geolocation) {
				  	navigator.geolocation.getCurrentPosition(this.storePosition);
				  }
				},

				storePosition(position) {
				 	localStorage.setItem("lat", position.coords.latitude);
				 	localStorage.setItem("long", position.coords.longitude);

				}
			},

			mounted() {
				this.getLocation();
			}
		})

	</script>


@endsection
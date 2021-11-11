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
		
		var createPintApp = new Vue({
			el: '#home-app',
			data() {
				return {
					pub : null, 
					pubs : [],
					beer: null,
					beers: [],
					coords: [],
					locationtest: null
				}
			},

			methods: {
				loadPubs(){
					axios.get('/api/pubs').then(response => this.pubs = response.data.data);
				},

				loadBeers(){
					axios.get('/api/beers').then(response => this.beers = response.data.data);
				},

				getLocation() {
				  if (navigator.geolocation) {
				  	navigator.geolocation.getCurrentPosition(this.storePosition);
				  }
				},

				storePosition(position) {
				 	this.coords = [position.coords.latitude, position.coords.longitude];
				 	this.pingLocation();
				},

				pingLocation() {
					axios.get('/api/pubs/pubsnear', {
						params: {
							lat: this.coords[0],
							long: this.coords[1]
						}
					}).then(response => this.locationtest = response.data.data);
				}
			},

			mounted() {
				this.loadPubs();
				this.loadBeers();
				this.getLocation();
			}
		})

	</script>


@endsection
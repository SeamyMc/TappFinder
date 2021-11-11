@extends('layouts.main')

@section('content')

	<div id="pint-create-form" class="row bg-light my-3 pt-3">
		<form action="{{route('pints.store')}}" method="POST">
			@csrf
			<div class="col-md-6 offset-md-3">
				<div class="row">
					<div class="col">
						<label for="inputCity" class="form-label">Where are you?</label>
						<input name="city" type="text" id="inputCity" class="form-control" placeholder="City/Town">	
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="inputPub" class="form-label">What pub did you visit? (@{{ pubs.length }})</label>
						<select name="pub" v-model="pub" class="form-select" aria-label="Default select example">
							<option v-for="pub in pubs" :value="pub.id">@{{pub.name}}</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="inputBeer" class="form-label">What pint did you have? (@{{ beers.length }})</label>
						<select name="beer" v-model="beer" class="form-select" aria-label="Default select example">
							<option v-for="beer in beers" :value="beer.id">@{{beer.name}}</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-5">
						<label for="inputPrice" class="form-label">How much did that set ye back?</label>
						<div class="input-group mb-3">
							<span class="input-group-text">£</span>
							<input name="price" type="text" id="inputPrice" class="form-control" placeholder="3.50">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-5">
						<label for="inputRating" class="form-label">What would you rate it out of 10??</label>
						<div class="input-group mb-3">
							<input name="rating" type="number" min="0" max="10" id="inputRating" class="form-control" placeholder="7">
							<span class="input-group-text">/10</span>
						</div>
					</div>
				</div>	

				<div class="row">
					<div class="col-5">
						<button type="Submit" class="btn btn-outline-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>
		<br>
	</div>

	<script type="text/javascript">
		
		var createPintApp = new Vue({
			el: '#pint-create-form',
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

				async loadPubsNear() {		
					await axios.get('/api/pubs/pubsnear', {
						params: {
							lat: Number(localStorage.getItem('lat')),
							long: Number(localStorage.getItem('long'))
						}
					}).then(response => this.pubs = response.data).catch((error) => {
	  					console.error(error);
	  				})
				}
			},

			watch: {
				'pubs' : function(){
					this.loadPubsNear();
				}
			},

			mounted() {
				this.loadPubs();
				this.loadBeers();
				//this.loadPubsNear();



			}
		})

	</script>
@endsection

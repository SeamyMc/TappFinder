@extends('layouts.main')

@section('content')

	<div id="beer-create-form" class="row bg-light my-3 pt-3">
		<form action="{{route('beers.store')}}" method="POST">
			@csrf
			<div class="col-md-6 offset-md-3">		
				<h3> Add a Beer: </h3>
				<div class="row">
					<div class="col">
						<label for="inputName" class="form-label">Whats it called?</label>
						<input name="name" type="text" id="inputName" class="form-control" placeholder="Beer">	
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="inputName" class="form-label">Who makes it?</label>
						<input name="brewery" type="text" id="inputBrewery" class="form-control" placeholder="Brewery">	
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="inputAbv" class="form-label">How strong is it?</label>
						<input name="abv" type="text" id="inputAbv" class="form-control" placeholder="e.g. 5%">	
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="inputDescription" class="form-label">Type:</label>
						<input name="description" type="text" id="inputDescription" class="form-control" placeholder="e.g. Stout">	
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="inputImage" class="form-label">Link to an image:</label>
						<input name="image" type="text" id="inputImage" class="form-control" placeholder="image link">	
					</div>
				</div>
				<br>
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
		
		var createBeerApp = new Vue({
			el: '#beer-create-form',
			data() {
				return {
	
				}
			},

			methods: {
				loadPubs(){
					return
				},

			},

			mounted() {

			}
		})

	</script>
@endsection

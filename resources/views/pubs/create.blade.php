@extends('layouts.main')

@section('content')

	<div id="pub-create-form" class="row bg-light my-3 pt-3">
		<form action="{{route('pubs.store')}}" method="POST">
			@csrf
			<div class="col-md-6 offset-md-3">
				<div class="row">
					<h3> Add a Pub: </h3>	
				</div>		

				<div class="row">
					<div class="col">
						<label for="inputName" class="form-label">Whats it called?</label>
						<input name="name" type="text" id="inputName" class="form-control" placeholder="Pub">	
					</div>
				</div>

				<div class="row">
					<div class="col">
						<label for="inputChain" class="form-label">Which chain is it owned by? (Leave blank if independent)</label>
						<input name="chain" type="text" id="inputChain" class="form-control" placeholder="Chain">	
					</div>
				</div>


				<div class="row">
					<div class="col">
						<label for="inputAdd1" class="form-label">Where is it?</label>
						<input name="add1" type="text" id="inputAdd1" class="form-control" placeholder="Address line 1">
						<input name="add2" type="text" id="inputAdd2" class="form-control" placeholder="Address line 2">
						<input name="city" type="text" id="inputCity" class="form-control" placeholder="Town/City">
						<input name="postcode" type="text" id="inputPostcode" class="form-control" placeholder="Postcode">		
					</div>
				</div>

				<div class="row">
					<div class="col">
						<label for="inputDescription" class="form-label">Describe it!</label>
						<input name="description" type="text" id="inputDescription" class="form-control" placeholder="Description">	
					</div>
				</div>

				<div class="row">
					<div class="col">
						<label for="inputImage" class="form-label">Link to an image</label>
						<input name="image" type="text" id="inputImage" class="form-control" placeholder="Image link">	
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

@endsection

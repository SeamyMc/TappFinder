<br>
<div class="row">
	<div class="col">
		<h1>
		{{$pub->name}}
		</h1>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="row">
			<div class="col">
				<h2>
					Description:
				</h2>
				<p>
					{{$pub->chain}}
					<br>
					{{$pub->description}}
				</p>
			</div>
		</div>
	</div>

	<div class="col-12">
		<h2>
			Pub Menu:
		</h2>

		<ul class="list-group">

			@foreach ($beers as $beer)
			<a style="all:unset; cursor:pointer" href="{{route('beer.show', $item->id)}}">
				<li class="list-group-item"> {{$beer->name}} {{$beer->abv}}% <!-- {{$prices[$beer->id]}} -->  </li>
			</a>
			@endforeach
			
		</ul>
	</div>
</div>

<br>


<div class="row">
<!-- 	<div class="col col-12 px-0">
		<img style="height:500px; width:100%; object-fit:cover;" src="{{$pub->image}}" class="img-fluid" alt="...">
	</div>
 -->	<div class="col-12 px-0">
		<iframe
			width="100%"
			height="500px"
			style="border:0"
			loading="lazy"
			allowfullscreen
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBSZqIeqL5y8kZ3rd5taqhgzu4sw5CJdQY
			&q={{$pub->postcode}}">
		</iframe>
	</div>
</div>








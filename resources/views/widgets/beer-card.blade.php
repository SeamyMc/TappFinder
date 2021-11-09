<div class="col-lg-3 col-md-4 col-sm-6 col-12 p-2">
	<a style="all:unset; cursor:pointer" href="{{route('beer.show', $item->id)}}">
		<div class="card" style="width: 100%;">
			<img style="height:200px; object-fit:cover;" src="{{$item->image}}">
<!-- 			<div  class="position-absolute me-2 mt-2 top-0 end-0">
				<a href="#" class="delete-btn btn-sm btn-outline-dark">X</a>
		 	</div> -->
			<div class="card-body">
				<div class="row">
					<div class = col-9>
						<h5 class="card-title">{{$item->name}}</h5>
						<p class="card-text">ABV: {{$item->abv}}%</p>
						<p class="card-text">
						Sold in: {{$item->taps_count}} pubs
					</div>
				</div>
			</div>
		</div>
	</a>
</div>
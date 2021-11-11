
	<div id="" class="col-lg-3 col-md-4 col-sm-6 col-12 py-3 my-3">
		<a style="all:unset; cursor:pointer" href="{{route('pub.show', $item->id)}}">
		<div id="{{$item->id}}" class="card" style="width: 100%;">
			<img style="height:200px; object-fit:cover;" src="{{$item->image}}">
			<div class="card-body">
				<div class="row">
					<div class = col-9>
						<h5 class="card-title">{{$item->name}}</h5>
						<p class="card-text">
							@if($item->distance < 10)
								{{round($item->distance, 2)}} km away
							@else
								{{round($item->distance)}} km away
							@endif
						</p>
					</div>
				</div>
			</div>
		</div>
		</a>
	</div>


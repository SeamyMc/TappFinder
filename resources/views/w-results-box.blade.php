
<div class="row bg-light my-3 pt-3">
	<div class="results col-12">
		<div class="row">
			<div class="col">
				<p class="fs-4 text">
					@if ($criteria == "taps")
						Showing Pubs that serve 
						@if ($searchQ == "")
							any Beer
						@else
							"{{$searchQ}}"
						@endif
					@else
						Showing: {{$criteria}}
					@endif
				</p>
			</div>
		</div>
		<div class="row">
			@foreach ($items as $item)
				@if ($criteria == "beers")
					@include ('w-beer-search-card')
				@endif

				@if ($criteria == "pubs" or $criteria == "taps")
					@include ('w-pub-search-card')
				@endif
			@endforeach

			@include('add-item-card')
		</div>
	</div>
</div>

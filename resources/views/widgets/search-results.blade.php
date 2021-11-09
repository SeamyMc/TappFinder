
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
					@include ('widgets.beer-card')
				@endif

				@if ($criteria == "pubs" or $criteria == "taps")
					@include ('widgets.pub-card')
				@endif
			@endforeach

			@include('widgets.add-item-card')
		</div>
	</div>
</div>

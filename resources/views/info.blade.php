@include('header')


	@if ($category == "pub")
		@include('pub_info')
	@else
		@include('beer_info')
	@endif


@include('footer')



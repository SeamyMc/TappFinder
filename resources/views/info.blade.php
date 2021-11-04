@include('header')

<div class = "container">
	@if ($category == "pub")
		@include('pub_info')
	@else
		@include('beer_info')
	@endif
	<br>
	<br>
	<br>
	<br>
	<p></p>
</div>


@include('footer')



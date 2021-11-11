@extends('layouts.main')
@section('content')
	<span id ="app-container">
		@include('widgets.searchbar')
		@include('widgets.search-results')
	</span>

<script type="text/javascript">
	var SearchApp = new Vue({
		el: '#app-container',
		mounted() {
			document.getElementById('lat').value = localStorage.getItem("lat");
			document.getElementById('long').value = localStorage.getItem("long");
		}
	})
</script>

@endsection


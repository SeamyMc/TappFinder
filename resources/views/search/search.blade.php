@extends('layouts.main')
@section('content')

	<span id ="app-container">
		@include('widgets.dynamic-searchbar')
		@include('widgets.search-results')
	</span>

<script type="text/javascript">
	var SearchApp = new Vue({
		el: '#app-container',

		data() {
			return{
				beers: [
					// {name: 'Guinness'},
					// {name: 'Smithwicks'},
					// {name: 'Punk IPA'},
					// {name: 'Hop House 13'},
					// {name: 'Hells Lager'},
					// {name: 'San Miguel'},
					// {name: 'Tennents'},
					// {name: 'Harp'},
					// {name: 'Estrella'},
					// {name: 'Birra Moretti'},
					// {name: 'Elvis Juice'},
					// {name: 'Gamma Ray'},
					// {name: 'Brains Bitter'},
					// {name: 'Brains SA Gold'},
					// {name: 'Brains Black'},
					// {name: 'Brains Smooth'}
				],

				matchedBeers: [

				],

				query: ""
			}
		},

		watch: {
    		query: function (val) {
				this.matchedBeers = [];
				if (this.query.length != 0){
					for (var i=0; i <this.beers.length; i++){
						if (this.beers[i].name.slice(0, this.query.length).toLowerCase() == this.query.toLowerCase()){
							if (this.matchedBeers.length < 5){
								this.matchedBeers.push(this.beers[i]);
							}
						}
					}
				}
			}
    	},

		mounted() {
			document.getElementById('lat').value = localStorage.getItem("lat");
			document.getElementById('long').value = localStorage.getItem("long");
			axios.get("/api/beers").then(response => this.beers = response.data.data);

		}
  
})
</script>

@endsection


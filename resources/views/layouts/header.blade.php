<html lang="en">
  <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	    <title>Tapp Finder</title>
  	</head>

 	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Tapp Finder</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contact">Contact</a>
						</li>
					</ul>
					@guest
						<span class="navbar-text">
							<a class="nav-link" href="/login">Log in</a>
						</span>
					@else
						<span class="navbar-text">
							<a class="nav-link" href="/login">Log out</a>
						</span>
					@endauth
					<span class="navbar-text">
						<a class="nav-link" href="/register">Register</a>
					</span>
				</div>
			</div>
		</nav>

 		<div class = "container">

		
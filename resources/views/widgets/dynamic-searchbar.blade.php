
<div id="searchbox" class="row bg-light my-3 pt-3">
	<div class="col-12">
		<div class="row">
			<form action="search">
				<div class="input-group mb-3">
					<div class="col-12 col-sm-12 col-md-3">
						<select name="criteria" class="form-select" aria-label="Default select example">
							<option value="taps"selected>Find pubs that serve:</option>
							<option value="pubs">Find Pubs:</option>
							<option value="beers">Find Beer:</option>
						</select>
					</div>
					<div class="col-12 col-sm-12 col-md-3">
						<input name="searchQ"  autocomplete="off" type="text" v-model="query" class="form-control" placeholder="any beer" aria-label="Username" aria-describedby="basic-addon1">
                        <ul class="list-group">
                            <li v-for="beer in matchedBeers" class="list-group-item"><button class="dropdown-item" type="button">@{{beer.name}}</button></li>
                        </ul>
                    </div>
					<div class="col-12 col-sm-12 col-md-1">
						<p class="fs-5 text-center"> in: </p>
					</div>
					<div class="col-12 col-sm-12 col-md-3">
						<input type="text" name="cityQ" class="form-control" placeholder="any city" aria-label="Username" aria-describedby="basic-addon1">
						<input id="lat" name="lat" type="hidden" value="0" class="form-control">
						<input id="long" name="long" type="hidden" value="0" class="form-control">
					</div>
					<div class="col-12 col-sm-12 col-md-2 text-center">
						<button type="submit" class="btn btn-primary">Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

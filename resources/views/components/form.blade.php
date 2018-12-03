<form action="/search" method="get">
    @csrf
    <div class="input-group mb-3">
        <input type="text" name="query" class="form-control" placeholder="Search for a movie..." aria-label="Search bar for movie" aria-describedby="search">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Search!</button>
        </div>
    </div>
</form>
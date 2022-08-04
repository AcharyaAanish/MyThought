@extends('Header.main')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .search-box{
        width: 50%;
        margin-left: 25%;
    }
</style>
<?php
    $movies = App\Models\Movies::latest()->paginate(5);
?>
@section('contain')
<section id="movies">
    <div class="search-box">
        <form class="d-flex" method="get" action="{{url('/searchmovies')}}">
            <input class="form-control me-2" type="searchmovies" name="searchmovies" placeholder="Search Movies" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
          </form>
    </div>
    <div class="container">
        @foreach ($movies as $key => $movie)
        <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset("storage/$movie->image_movies")}}" class="card-img" alt="Not Found">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center; font-weight:bolder;">{{$movie->title_movies}}</h4>
                  <h6 class="card-text" style="text-align:right"><span style="font-weight:bold;">Date : </span>{{date_format($movie->created_at,'D M Y')}}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Director Name : </span>{{ $movie->director_name }}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Rating : </span>{{ $movie->rating_movies  }}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Release date: </span>{{ $movie->release_date}}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Cast Name : </span>{{ $movie->cast_name }}</h6>
                  <p class="card-text" style="text-align:">{!! $movie->description_movies  !!}</p>
                  <h6 class="card-text" style="text-align:right; font-weight:bold;"><span>Author Name : </span>{{$movie->author_name}}</h6>

                </div>

              </div>
            </div>
        </div>

        @endforeach

        <div class="d-flex flex-wrap justify-content-center">{{$movies->links()}}</div>
    </div>
  </section>
@endsection

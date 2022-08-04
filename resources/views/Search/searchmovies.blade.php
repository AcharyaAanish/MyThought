@extends('Header.main')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('contain')
<section id="movies">
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

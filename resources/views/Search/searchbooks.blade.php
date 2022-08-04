@extends('Header.main')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
    // $books = App\Models\Books::latest()->paginate(3);
?>
@section('contain')
<section id="books">

    <div class="container">

        @foreach ($books as $key => $book)
        <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset("storage/$book->image_books")}}" class="card-img" alt="Not Found">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h4 class="card-title"style="text-align: center; font-weight:bolder;">{{$book->title_books}}</h4>
                  <h6 class="card-text" style="text-align:right"><span style="font-weight:bold;">Date : </span>{{date_format($book->created_at , 'D M Y')}}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Author Name : </span>{{ $book->author_name  }}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Rating : </span>{{ $book->rating_books  }}</h6>
                  <h6 class="card-text" style="text-align:left"><span style="font-weight:bold;">Publish Date : </span>{{ $book->publish_date }}</h6>
                  <p class="card-text">{!! $book->description_books  !!}</p>
                  <h6 class="card-text" style="text-align:right; font-weight:bold;"><span>Writer Name : </span>{{$book->writer_name}}</h6>

                </div>

              </div>
            </div>
        </div>

        @endforeach

        <div class="d-flex flex-wrap justify-content-center">{{$books->links()}}</div>
    </div>
  </section>
@endsection

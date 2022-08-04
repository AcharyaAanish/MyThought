@extends('Header.main')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('contain')
<section id="blogs">
    <div class="container">
        @foreach ($blogs as $key => $blog)
        <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset("storage/$blog->image_blog")}}" class="card-img" alt="Not Found">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h2 class="card-title" style="text-align: center; font-weight:bolder">{{$blog->title_blog}}</h2>
                  <h6 class="card-text" style="margin-top:12px; text-align:right "><span style="font-weight:bold">Publsih Date : </span>{{date_format($blog->created_at, 'D M Y')}}</h6>
                  <p class="card-text">{!! $blog->description_blog !!}</p>
                  <h6 class="card-text" style="text-align: right; font-weight:bold"><span>Author Name : </span>{{$blog->author_name}}</h6>

                </div>

              </div>
            </div>
        </div>

        @endforeach

        <div class="d-flex flex-wrap justify-content-center">{{$blogs->links()}}</div>
    </div>
  </section>
@endsection

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
    $blogs = App\Models\Blog::latest()->paginate(5);
?>
@section('contain')
<section id="blogs">
    <div class="search-box">
        <form class="d-flex" method="get" action="{{url('/searchblogs')}}">
            <input class="form-control me-2" type="searchblogs" name="searchblogs" placeholder="Search Blogs" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
          </form>
    </div>
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

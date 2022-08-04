@extends('Header.main')
<style>
    .search-box{
        width: 50%;
        margin-left: 25%;
    }
</style>
<?php
    $takemes = App\Models\Takeme::latest()->paginate(2);
?>
@section('contain')
<section id="portfolio" class="portfolio">
    <div class="search-box">
        <form class="d-flex" method="get" action="{{url('/searchtakeme')}}">
            <input class="form-control me-2" type="searchtakeme" name="searchtakeme" placeholder="Search Take Me" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
          </form>
    </div>
    <div class="container">

      <div class="section-title">
        <h2>{{__('Product')}}</h2>
        <h3>Check our <span>{{__('Product')}}</span></h3>
      </div>



      <div class="row portfolio-container">
        @foreach($takemes as $takeme)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="{{asset("/storage/$takeme->image_takeme")}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><span style="font-weight: bold">Product Name : </span>{{$takeme->product_name}}</h4>
            <p><span style="font-weight: bold">Product Cost  : </span>{{$takeme->product_cost}}</p>
            @if($takeme->product_discount != null)
            <p><span style="font-weight: bold">Discount : </span>{{$takeme->product_discount}}</p>
            @endif
            <a href="{{url('/payment')}}"  class="preview-link"><i class="bx bx-plus"></i></a>
          </div>
        </div>
        @endforeach

      </div>
      <div class="d-flex flex-wrap justify-content-center">{{$takemes->links()}}</div>
    </div>
  </section>
@endsection

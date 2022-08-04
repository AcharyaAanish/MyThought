@extends('Header.main')

@section('contain')
<section id="portfolio" class="portfolio">  
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

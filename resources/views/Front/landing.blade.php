@extends('Header.main',['activePage' => 'home' ,'titlePage'=>__('Home')])
<?php
    $aboutus = App\Models\Aboutus::latest()->first();
?>
@section('contain')
<main id="main">

    <section id="hero">
        <div class="hero-container">
          <h3>Welcome to <strong>MyThought</strong></h3>
          <h1>Freedom of Speech and Hate Speech has a thin line.</h1>
          <h2>It is our duty and our right to protect and condeem hate speech</h2>
        </div>
      </section><!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Learn More <span>About Us</span></h3>
        </div>

        <div class="row content">
          <div class="col-lg-6">
           <img src="{{asset("storage/$aboutus->image_about")}}"/>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                    {!!$aboutus->description_about !!}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
        </div>



        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{__('Kamalphokari , Kathmandu, Nepal')}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{__('mythought@gmail.com')}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{__('01-2345789')}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('contact.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{route('front.index')}}">MyThought</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">


        <ul>
            
          <li class="{{isset($activePage) && $activePage=='home' ? 'active' :''}}" ><a {!!isset($activePage) && $activePage=='home' ? 'aria-current="active"':'' !!}   href="{{route('front.index')}}">{{__('HOME')}}</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          <li class="dropdown"><a href="{{url('/bookfront')}}"><span>{{__('BOOKS')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/bookaction')}}">{{__('Action & Adventures')}}</a></li>
              <li class="dropdown"><a href="{{url('/bookclassics')}}"><span>{{__('Classics')}}</span></a>
                {{-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> --}}
              </li>
              <li><a href="{{url('/bookcomic')}}">{{__('Comic Book')}}</a></li>
              <li><a href="{{url('/bookhorror')}}">{{__('Horror')}}</a></li>
              <li><a href="{{url('/bookliterary')}}">{{__('Literary Ficition')}}</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{url('/moviefront')}}"><span>{{__('MOVIES')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/movieaction')}}">{{__('Action')}}</a></li>
              <li class="dropdown"><a href="{{url('/moviecomedy')}}"><span>{{__('Comedy')}}</span></a>
                {{-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> --}}
              </li>
              <li><a href="{{url('/moviedrama')}}">{{__('Drama')}}</a></li>
              <li><a href="{{url('/moviefantasy')}}">{{__('Fantasy')}}</a></li>
              <li><a href="{{url('/moviehorror')}}">{{__('Horror')}}</a></li>
              <li><a href="{{url('/movieromance')}}">{{__('Romance')}}</a></li>
              <li><a href="{{url('/moviethriller')}}">{{__('Thriller')}}</a></li>
              <li><a href="{{url('/moviemystery')}}">{{__('Mystery')}}</a></li>
            </ul>
          </li>
          <li><a href="{{url('/takemefront')}}">{{__('TAKE ME')}}</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li><a href="{{url('/blogfront')}}">{{__('BLOGS')}}</a></li>


          <li><a class="nav-link scrollto" href="{{url('/contactfront')}}">{{__('CONTACT')}}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

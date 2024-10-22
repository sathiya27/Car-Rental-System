@extends('layouts.app')

@section('title', 'Home page')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="hero_area">
  <!-- slider section -->
  <section class=" slider_section position-relative">
    <div class="slider_container">
      <div class="img-box">
        <img src="{{asset('images/hero-img.jpg')}}" alt="">
      </div>
      <div class="detail_container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="detail-box">
                <h1>
                  Rent Car <br>
                  Experts <br>
                  Service
                </h1>
                <a href="">
                  Contact Us
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h1>
                  Rent Car <br>
                  Experts <br>
                  Service
                </h1>
                <a href="">
                  Contact Us
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h1>
                  Rent Car <br>
                  Experts <br>
                  Service
                </h1>
                <a href="">
                  Contact Us
                </a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>
<!-- book section -->
<section class="book_section">
  <div class="form_container">
    <form action="{{route('cars.index')}}">
      <div class="form-row">
        <div class="col-lg-8">
          <div class="form-row">
            <div class="col-md-6">
              <label for="pickUpLocation">Pick Up Locaion</label>
              <select name="pickUpLocation" id="pickUpLocation" class="form-control" required>
                <option value="" disabled selected>Select a location</option>
                @foreach($locations as $location)
                <option value="{{$location->id}}">{{$location->locationName}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
              <label for="dropOffLocation">Pick Up Locaion</label>
              <select name="dropOffLocation" id="dropOffLocation" class="form-control" required>
                <option value="" disabled selected>Select a location</option>
                @foreach($locations as $location)
                <option value="{{$location->id}}">{{$location->locationName}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="pickUpDate">Pick Up Date</label>
              <input type="date" name="pickUpDate" class="form-control" min="{{ date('Y-m-d') }}" required>
            </div>
            <div class="col-md-6">
              <label for="dropOffDate">Drop Off Date</label>
              <input type="date" name="dropOffDate" class="form-control" min="{{ date('Y-m-d') }}" required>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="btn-container">
            <button type="submit" class="">
              Search
            </button>
          </div>
        </div>
      </div>

    </form>
  </div>
  <div class="img-box">
    <img src="{{asset('images/book-car.png')}}" alt="">
  </div>
</section>

<!-- end book section -->

<!-- car section -->

<section class="car_section layout_padding2-top layout_padding-bottom">
  <div class="container">
    <div class="heading_container">
      <h2>
        Better Way For Find Your Favourite Cars
      </h2>
      <p>
        It is a long established fact that a reader will be distracted by the readable
      </p>
    </div>
    <div class="car_container">
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/c-1.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Choose Your Car
          </h5>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/c-2.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Get Your Car
          </h5>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/c-3.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Contact Your Dealer
          </h5>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end car section -->

<!-- about section -->

<section class="about_section layout_padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 px-0">
        <div class="img-box">
          <img src="{{asset('images/about-img.png')}}" alt="">
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="detail-box">
          <h2>
            About Our Cars
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->


<!-- best section -->

<section class="best_section">
  <div class="container">
    <div class="book_now">
      <div class="detail-box">
        <h2>
          Our Best Cars
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
      <div class="btn-box">
        <a href="">
          Book Now
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end best section -->

<!-- rent section -->

<section class="rent_section layout_padding">
  <div class="container">
    <div class="rent_container">
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/r-1.png')}}" alt="">
        </div>
        <div class="price">
          <a href="">
            Rent $200
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/r-2.png')}}" alt="">
        </div>
        <div class="price">
          <a href="">
            Rent $200
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/r-3.png')}}" alt="">
        </div>
        <div class="price">
          <a href="">
            Rent $200
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/r-4.png')}}" alt="">
        </div>
        <div class="price">
          <a href="">
            Rent $200
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/r-5.png')}}" alt="">
        </div>
        <div class="price">
          <a href="">
            Rent $200
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/r-6.png')}}" alt="">
        </div>
        <div class="price">
          <a href="">
            Rent $200
          </a>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        See More
      </a>
    </div>
  </div>
</section>


<!-- end rent section -->

<!-- blog section -->

<section class="blog_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Our Latest Blog
      </h2>
      <p>
        It is a long established fact that a reader will be distracted by the
      </p>
    </div>
  </div>
  <div class="blog_container">
    <div class="layout_padding2-top">
      <div class="carousel-wrap ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="date-box">
                <h6>
                  04 Nov 2019
                </h6>
              </div>
              <div class="img-box">
                <img src="{{asset('images/b-1.jpg')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Vintage
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="date-box">
                <h6>
                  04 Nov 2019
                </h6>
              </div>
              <div class="img-box">
                <img src="{{asset('images/b-2.jpg')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Steering wheels
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="date-box">
                <h6>
                  04 Nov 2019
                </h6>
              </div>
              <div class="img-box">
                <img src="{{asset('images/b-3.jpg')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Buick Car
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="date-box">
                <h6>
                  04 Nov 2019
                </h6>
              </div>
              <div class="img-box">
                <img src="{{asset('images/b-2.jpg')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Steering wheels
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end blog section -->

<!-- us section -->

<section class="us_section">
  <div class="container">
    <div class="heading_container">
      <h2>
        Why choose Us
      </h2>
      <p>
        It is a long established fact that a reader will be distracted by the
      </p>
    </div>
  </div>
  <div class="us_container layout_padding2">
    <div class="content_box">
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/u-1.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Low Rent
          </h5>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/u-2.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Fast Car
          </h5>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/u-3.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Safe Car
          </h5>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{asset('images/u-4.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Quick Support
          </h5>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Read More
      </a>
    </div>
  </div>
</section>

<!-- end us section -->

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        What Is say Customer
      </h2>
      <p>
        It is a long established fact that a reader will be distracted by the
      </p>
    </div>
    <div class="layout_padding2-top">
      <div class="carousel-wrap ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                </p>
              </div>
              <div class="client_id">
                <div class="img-box">
                  <img src="{{asset('images/client-1.png')}}" alt="" class="img-1">
                  <img src="{{asset('images/client-1-white.png')}}" alt="" class="img-2">
                </div>
                <div class="name">
                  <h6>
                    Established
                  </h6>
                  <p>
                    by the readable
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                </p>
              </div>
              <div class="client_id">
                <div class="img-box">
                  <img src="{{asset('images/client-2.png')}}" alt="" class="img-1">
                  <img src="{{asset('images/client-2-white.png')}}" alt="" class="img-2">
                </div>
                <div class="name">
                  <h6>
                    Blished
                  </h6>
                  <p>
                    by the readable
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                </p>
              </div>
              <div class="client_id">
                <div class="img-box">
                  <img src="{{asset('images/client-1.png')}}" alt="" class="img-1">
                  <img src="{{asset('images/client-1-white.png')}}" alt="" class="img-2">
                </div>
                <div class="name">
                  <h6>
                    Establi
                  </h6>
                  <p>
                    by the readable
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                </p>
              </div>
              <div class="client_id">
                <div class="img-box">
                  <img src="{{asset('images/client-1.png')}}" alt="" class="img-1">
                  <img src="{{asset('images/client-1-white.png')}}" alt="" class="img-2">
                </div>
                <div class="name">
                  <h6>
                    Establi
                  </h6>
                  <p>
                    by the readable
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Request A call back
      </h2>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="form_container">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputName4" placeholder="Name ">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputSubject4" placeholder="Phone">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inputMessage" placeholder="Message">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="contact_items">

      <a href="">
        <div class="img-box">
          <img src="{{asset('images/location.png')}}" alt="">
        </div>
        <h6>
          Loram Ipusum ari
          lo elisant na
        </h6>
      </a>
      <a href="">
        <div class="img-box">
          <img src="{{asset('images/call.png')}}" alt="">
        </div>
        <h6>
          (+12 1234456789)
        </h6>
      </a>
      <a href="">
        <div class="img-box">
          <img src="{{asset('images/mail.png')}}" alt="">
        </div>
        <h6>
          demo@gmail.com
        </h6>
      </a>

    </div>
    <div class="social_container">
      <div class="social-box">
        <div>
          <a href="">
            <img src="{{asset('images/fb.png')}}" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="{{asset('images/twitter.png')}}" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="{{asset('images/linkedin.png')}}" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="{{asset('images/insta.png')}}" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->

<!-- map section -->

<section class="map_section">
  <!-- map section -->
  <div class="map_container">
    <div class="map-responsive">
      <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
    </div>
  </div>
  <!-- end map section -->
</section>


<!-- end map section -->
@endsection
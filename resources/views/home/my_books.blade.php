<!DOCTYPE html>
<html lang="en">

<head>
  @include('home.css')

  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-liberty-market.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>

<body>
  @include('home.header')

  <div class="currently-market">
    <div class="container">
      <div class="row">

      @if(session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
          <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>
        </div>
        @endif

        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View Your <em>Books</em> Here.</h2>
          </div>
        </div>
        

        <div class="col-lg-12" style="margin: 30px;">
          <div class="row grid">

          @foreach($data as $book)

            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="book/{{$book->book->book_img}}" alt="" style="border-radius: 5px; min-width: 195px; max-width: 250px; height: auto;">
                </div>
                <div class="right-content">
                  <h4>{{$book->book->title}}</h4>
                  <span class="author">
                    <img src="author/{{$book->book->author_img}}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    <h6>{{$book->book->author}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    <strong>Description</strong>
                    <p>{{$book->book->description}}</p>
                  </span>
                  <br>
                  <div class="">
                  <a class="btn btn-primary" href="{{url('return_book', $book->id)}}">Return</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

           


          </div>
        </div>
        
  </div>
    </div>
      </div>


      

  @include('home.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>

  <script src="{{asset('assets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/js/popup.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>

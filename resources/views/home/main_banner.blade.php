<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
    <div class="container">
      <div class="row">

        
       @if(session()->has('message'))

          <div class="alert alert-success">

          {{session()->get('message')}}

          <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

          </div>

        @endif

        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Book is Knowledge</h6>
            <h2>Knowledge is Power</h2>
            <p style="font-size: large;">"Welcome to Serenity Library Where Knowledge Meets Imagination! Explore our vast collection of books, 
              discover new worlds, and embark on unforgettable journeys through the pages of literature.
               Whether you're a student, an avid reader, or a curious mind, our library is your gateway to endless possibilities. 
              Start your adventure today and let the magic of books inspire you."</p>
            <div class="buttons">
              <div class="border-button">
                <a href="{{url('explore')}}">Explore Top Books</a>
              </div>
              <div class="main-button">
                <a href="" target="_blank">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="">
            <div class="item">
              <img src="assets/images/banner.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
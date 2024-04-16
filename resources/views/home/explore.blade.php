<!DOCTYPE html>
<html lang="en">

  <head>
    
  <base href="/public">

   @include('home.css')
  </head>

<body>

  @include('home.header')
  
  <div class="currently-market">
    <div class="container">
      <div class="row">

      <div style="margin-top: 20px;">
        @if(session()->has('message'))

            <div class="alert alert-success">

            {{session()->get('message')}}

            <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

            </div>

          @endif
        </div>

      <div class="col-lg-6" style="margin-top: 50px;">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Books</em> Currently In Stock.</h2>
          </div>
        </div>
        

        <div class="col-lg-10">
          <div class="filters">
            <ul>
            <a href="{{url('explore')}}">
              <li class="active">All Books</li>
              </a>
              @foreach($category as $category)
              <a href="{{url('category_search', $category->id)}}">
              <li>{{$category->title}}</li>
              </a>
              @endforeach
              
              
            </ul>
          </div>
        </div>
        

        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" style="margin-top: 30px;">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input class="form-control" type="search" name="search" placeholder="Search book by title or author" autocomplete="on">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>           
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-lg-12" style="margin: 30px;">
          <div class="row grid">

          @foreach($data as $data)

            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="book/{{$data->book_img}}" alt="" style="border-radius: 5px; min-width: 195px; max-width: 250px; max-height: 250px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <span class="author">
                    <img src="author/{{$data->author_img}}" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    <h6>{{$data->author}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>{{$data->quantity}}</strong><br> 
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    <strong>Description</strong>
                    <p>{{$data->description}}</p>
                  </span>
                  <br>
                  <div class="">
                    <a class="btn btn-primary" href="{{url('borrow_books', $data->id)}}">Borrow</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

           


          </div>
        </div>
      </div>
    </div>


  @include('home.footer')
 
  </body>
</html>
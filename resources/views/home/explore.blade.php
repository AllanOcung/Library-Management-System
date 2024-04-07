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
        

        <div class="col-lg-10" style="margin-top: 100px;">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>

              @foreach($category as $category)
              <a href="{{url('category_search', $category->id)}}">
              <li data-filter=".msc">{{$category->title}}</li>
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
                                <input class="form-control" type="search" name="search" placeholder="Search book by title, author, category">
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
                  <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; min-width: 195px; max-width: 250px; max-height: 250px;">
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
                  <div class="text-button">
                    <a href="{{url('book_details', $data->id)}}">View Item Details</a>
                  </div>
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
  </div>

  @include('home.footer')
 
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>

   @include('home.css')

   <style>
    /* Styles for the book items */
.item {
    background-color: gray;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
    margin-bottom: 20px;
    width: 250px;
    overflow: hidden; /* Ensure images don't overflow */
}

.left-image img { 
    min-width: 195px; 
    max-width: 250px; 
    height: auto;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.right-content {
    padding: 20px;
}

.right-content h4 {
    margin-top: 0;
    margin-bottom: 10px;
}

.author img {
    margin-right: 10px;
}

.line-dec {
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
}

.action-buttons .btn {
    margin-right: 10px;
}

/* Hover effect */
.item:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

   </style>
  </head>

<body>

  @include('home.header')

  <div class="item-details-page">
    <div class="container">
      <div class="row">

      @if(session()->has('message'))

        <div class="alert alert-success">

        {{session()->get('message')}}

        <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

        </div>

        @endif

        <div class="col-lg-12">
    <div class="row grid">
        @foreach($data as $book)
            <div class="col-lg-6 currently-market-item all msc">
                <div class="item">
                    <div class="left-image">
                        <img src="book/{{$book->book->book_img}}" alt="Book Image" style="border-radius: 20px; min-width: 195px; max-width: 250px; max-height: 250px;">
                    </div>
                    <div class="right-content">
                        <h4>{{$book->book->title}}</h4>
                        <div class="author">
                            <img src="author/{{$book->book->author_img}}" alt="Author Image" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>{{$book->book->author}}</h6>
                        </div>
                        <div class="line-dec"></div>
                        <div class="action-buttons">
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
 
  </body>
</html>
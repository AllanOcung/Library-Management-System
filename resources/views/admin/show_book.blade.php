<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Available Books</title>

    @include('admin.css')

    <style>

.item {
    background-color: gray;
    color: #ffffff;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.item:hover {
    background-color: #555555; /* Darker gray */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
  .book-image {
    border-radius: 20px;
    min-width: 195px;
    max-width: 250px;
    max-height: 250px;
}

.book-title {
    margin-top: 10px;
    font-size: 24px;
}

.author-info {
    margin-top: 20px;
}

.author-image {
    max-width: 50px;
    max-height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
}

.author-name {
    margin-left: 20px;
}

.bid-info {
    margin-top: 10px;
}

.line-dec {
    border-bottom: 1px solid #ccc;
    margin: 15px 0;
}

.book-description {
    margin-top: 10px;
}

.button-group {
    margin-top: 10px;
}

.button-group .btn {
    margin-top: 10px;
    margin-right: 10px;
}

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        
        @include('admin.topbar')
        
        <div class="container">
                 
                  <h4 class="cat_label" style="font-size: 32px; color: #333;">Available <em>Books</em></h4>
                 <br>
                 <div id="books-container" class="d-flex flex-wrap justify-content-center">
                    @foreach($book as $book)
                    <div class="col-lg-6 currently-market-item all msc">
                        <div class="item">
                            <div class="left-image">
                                <img src="book/{{$book->book_img}}" alt="Book Image" class="book-image">
                                <h4 class="book-title">{{$book->title}}</h4>
                            </div>
                            <div class="right-content">
                                
                                <div class="author-info">
                                    <img src="author/{{$book->author_img}}" alt="Author Image" class="author-image">
                                    <h6 class="author-name">{{$book->author}}</h6>
                                </div>
                                <div class="bid-info">
                                    <strong>Available Copies:</strong> {{$book->quantity}}<br> 
                                </div>
                                <div class="line-dec"></div>
                                <p class="book-description"><strong>Description:</strong> {{$book->description}}</p>
                                <div class="button-group">
                                    <a class="btn btn-primary" href="{{url('borrow_books', $book->id)}}">Borrow</a>
                                    <a href="{{ url('book_delete', $book->id) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>



                </div>

    </div>
    
    </div>

    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->
    
</body>

</html>
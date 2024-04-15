<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    @include('admin.css')

    <style>
        .tiles-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Adjust the gap between tiles */
        }

        .book-tile {
            width: calc(33.33% - 20px); /* Adjust the width of each tile */
            background-color: #f9f9f9;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .book-image img {
            width: 100%;
            height: auto;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .book-details {
            padding: 15px;
        }

        .book-details h3 {
            margin-top: 0;
        }

        .action {
            padding: 15px;
            text-align: right;
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
                  <div>
                      @if(session()->has('message'))
                          
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          {{session()->get('message')}}  
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
        
                      @endif
                  </div>

                  <h1 class="cat_label">Available Books</h1>
                 <br>

                 <div class="tiles-container">
                    @foreach($book as $book)
                    <div class="book-tile">
                        <div class="book-image">
                            <img src="book/{{$book->book_img}}" alt="{{$book->title}} Image">
                        </div>
                        <div class="book-details">
                            <h3>{{$book->title}}</h3>
                            <p><strong>Author:</strong> {{$book->author}}</p>
                            <p><strong>Description:</strong> {{$book->description}}</p>
                            <p><strong>Quantity:</strong> {{$book->quantity}}</p>
                            <p><strong>Category:</strong> {{$book->category->title}}</p>
                        </div>
                        <div class="action">
                            <a href="{{ url('book_delete', $book->id) }}" class="btn btn-danger">Delete</a>
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
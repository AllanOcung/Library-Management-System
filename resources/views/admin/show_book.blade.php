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

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

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

                    <table id="example" class="table table-striped" style="width:100%">

                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Author image</th>
                            <th>Book image</th>                          
                            <th>Action</th>                          
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($book as $book)
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->quantity}}</td>
                            <td>{{$book->category->title}}</td>
                            <td>
                                <img src="author/{{$book->author_img}}" style="border-radius:  8px; max-width: 60%; max-height: 60%;" />
                            </td>
                            <td>
                                <img src="book/{{$book->book_img}}" style="border-radius: 8px; max-width: 60%; max-height: 60%;"/>
                            </td>
                            <td>
                              <a href="{{ url('book_delete', $book->id) }}" class="btn btn-danger">Delete</a>                             
                            </td>
                                                        
                        </tr>
                        @endforeach
                        </tbody>
                        
                        </table>

                    </div>

    </div>
    
    </div>

    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->

    <script type="text/javascript">
      new DataTable('#example');

    
    </script>

    
</body>

</html>
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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        
        @include('admin.topbar')
                    
        <div class="container mt-5">
                <h1 class="text-center mb-4">Add Book</h1>

                <form action="{{url('store_book')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="book_name" required>
                    </div>

                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="author_name" required>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="" selected>Select Category</option>
                            @foreach($data as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Book image</label>
                        <input type="file" class="form-control-file" name="book_img" required>
                    </div>

                    <div class="form-group">
                        <label>Author image</label>
                        <input type="file" class="form-control-file" name="author_img" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add Book</button>
                    </div>
                </form>
            </div>

       

    </div>
   

    </div>

    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
</body>

</html>
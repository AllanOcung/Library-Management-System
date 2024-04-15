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

                 <h1 class="cat_label">Borrowed Books</h1>
                 <br>

                    <table id="example" class="table table-striped" style="width:100%">

                        <thead>
                            <tr>
                            <th>Member</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Book</th>                                                                                                 
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->user->email}}</td>
                            <td>{{$data->user->phone}}</td>
                            <td>
                                <div><img src="book/{{$data->book->book_img}}" style="border-radius: 5px; min-width: 50px; max-width: 90px; max-height: 150px;"/></div>
                                <div>{{$data->book->title}}</div>                                                  
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
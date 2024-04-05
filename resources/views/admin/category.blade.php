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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
   integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style type="text/css"> 

            /* Add CSS styles for the form */
      .form-container {
        max-width: 400px; /* Set maximum width for the form container */
        margin: 0 auto; /* Center the form horizontally */
      }

      .form-container form {
        text-align: right; /* Align form elements to the right */
      }

      .form-container label {
        display: inline-block; /* Make labels inline */
        width: 150px; /* Set width for labels */
        text-align: right; /* Align labels to the right */
        margin-right: 10px; /* Add some space between label and input */
      }

      .form-container input[type="text"] {
        width: calc(100% - 160px); /* Calculate width for text input */
        padding: 5px; /* Add padding to the input */
        margin-bottom: 10px; /* Add some space between inputs */
      }

      .form-container .btn-primary {
        width: 100%; /* Set button width to fill container */

         /* Add CSS styles for the table */
        }

            
   </style>



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
       
        <div class="div_center">
            <div>
                  @if(session()->has('message'))

                      <div class="alert alert-success">
                      {{session()->get('message')}}

                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                      </div>
    
                  @endif
              <div>

              <h1 class="cat_label">Add Category</h1>
              <form action="{{url('add_category')}}" method="post" class="form-container">
                  @csrf
                  <span style="padding-right: 15px; padding-top: 15px;">
                  <label>Category Name</label>
                  <input type="text" name="category" required>
                  </span>
                  <br>
                  <br>
                  <input class="btn btn-primary" type="submit" value="Add Category">
              </form>
          </div>
          <br>
             <div class="container">

                <table id="example" class="table table-striped" style="width:100%">

                    <thead>
                        <tr>
                        <th>Category Name</th>
                        <th>Added on</th>
                        <th>Updated on</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $data)
                      <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->updated_at}}</td>
                        <td>
                              <a href="{{ url('cat_delete', $data->id) }}" class="btn btn-danger">Delete</a>                             
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
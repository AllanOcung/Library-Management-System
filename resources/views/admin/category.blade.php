<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

   @include('admin.css')

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
      }

      /*Category Name 
       th
      {
        background-color: skyblue;
        padding: 10px;
      }*/

     

      /* Add CSS styles for the table */
      .table-container 
      {
        width: 50%; 
        margin: auto; /* Center the table horizontally */
        text-align: center;
        margin-top: 50px;
        
      }

      .table-container th 
      {
        background-color: skyblue; /* Add background color to table header */
        padding: 10px;
        border-top-left-radius: 5px; /* Add rounded corners to top-left */
        border-top-right-radius: 5px; /* Add rounded corners to top-right */
      }

      
      .table-container td {
        border: 1px solid #ddd; /* Add border to table cells */
        padding: 8px; /* Add padding to table cells */
        text-align: left; /* Align text to the left */
        
      }


      .table-container tr:nth-child(even) 
      {
        background-color: gray; /* Add alternate background color to even rows */
      }



    
   </style>

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_center">

                <div>

                @if(session()->has('message'))

                    <div class="alert alert-success">
                    {{session()->get('message')}}

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    </div>
                    

                @endif
                </div>

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

               <div >
                  <table class="table-container">
                    <tr>
                      <th>Category Name</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                      <td>{{$data->title}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>

          </div>
        </div>  
    </div>
      
      @include('admin.footer')
    </div>
  </body>
</html>
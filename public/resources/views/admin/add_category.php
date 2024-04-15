<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Category</title>

    @include('admin.css')

   <style type="text/css"> 
    .categories-collections {
        padding: 50px 0;
    }

    .categories .section-heading {
        text-align: center;
        margin-bottom: 50px;
    }

    .categories .section-heading h2 {
        font-size: 32px;
        color: #333;
    }

    .categories .item {
        text-align: center;
        padding: 30px;
        margin-bottom: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
    }

    .categories .item:hover {
        transform: translateY(-10px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .categories .icon img {
        max-width: 80px;
    }

    .categories .item h4 {
        font-size: 24px;
        margin-top: 20px;
    }

    .categories .item p {
        font-size: 14px;
        color: #666;
        margin-top: 10px;
    }

    .categories .btn-danger {
        margin-top: 20px;
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
       
        <div class="div_center">
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
    </div>


    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->

</body>

</html>




          
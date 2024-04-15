<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categories</title>

    @include('admin.css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
   integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        background-color: #fff;
        border-radius: 10px;
        border-color: blue;
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

    .categories-collections .item h4 {
        color: blue;
    }

    .gray-tile {
    background-color: #ccc; /* Gray color */
    padding: 20px; /* Adjust padding as needed */
    border-radius: 10px; /* Add rounded corners */
    /* Add any other styling you desire */
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

          <div class="categories-collections">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="categories">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="section-heading">
                                          <div class="line-dec"></div>
                                          <h2>Browse Through Book <em>Categories</em> Here.</h2>
                                      </div>
                                  </div>
                                  @foreach($data as $category)
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                      <div class="item gray-tile">
                                          <div class="icon">
                                              <img src="assets/images/icon-{{$loop->index + 1}}.png" alt="">
                                          </div>
                                          <h4>{{$category->title}}</h4>
                                          <p>Added on: {{$category->created_at}}</p>
                                          <a href="{{ url('cat_delete', $category->id) }}" class="btn btn-danger">Delete</a>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

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

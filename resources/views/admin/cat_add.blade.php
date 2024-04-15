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

    <style>
        
        .tile {
            background-color: #3498db;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%; /* Adjust width as needed */
            margin: 0 auto; /* Center align horizontally */
            text-align: center;
            color: black; /* Text color */
        }

        .tile h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: left;
        }

        .tile label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .tile input[type="text"],
        .tile input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .tile input[type="submit"] {
            background-color: #2980b9;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        .tile input[type="submit"]:hover {
            background-color: #1f6aa5;
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

        <div class="tile">
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
            <h1>Add Category</h1>

            <form action="{{url('add_category')}}" method="post">
                @csrf 
                <span>
                    <label>Category Name</label>
                    <input type="text" name="category" required>
                </span>
                <input type="submit" value="Add Category">
            </form>


        </div>


        </div>
    </div>

    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->

    
</body>

</html>
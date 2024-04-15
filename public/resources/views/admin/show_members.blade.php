<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

                
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* Custom CSS */
            body {
            font-family: Arial, sans-serif;
            margin: 20px;
            }
            table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            }
            th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
            th {
            background-color: #f2f2f2;
            color: black;
            }
            tr:nth-child(even) {
            background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #cceeff; /* Change the color as desired */
            }
        </style>
        @include('admin.css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        
    @include('admin.topbar')
     
        <div class="container">
            <h2>Members Information</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $data)
                      <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>                        
                        <td>{{$data->address}}</td>                        
                      </tr>
                      @endforeach
                </tbody>
            </table>
        </div>

         
    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->
    
    
</body>

</html>
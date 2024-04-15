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
.container {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 0 auto;
    }

    h2 {
        color: #333;
        font-size: 28px;
        margin-bottom: 20px;
        text-align: center;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
        color: #333;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
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
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

         
    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->
    
    
</body>

</html>
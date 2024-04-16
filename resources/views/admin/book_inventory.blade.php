<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Book Inventory Report</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        h2 {
            margin-top: 0;
            color: #333;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        p {
            margin-bottom: 10px;
            color: #555;
        }
        img.logo {
            max-width: 200px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>      

    <div class="container">
    <i class="fas fa-graduation-cap"></i>
        <h2>Book Inventory Report</h2>
        <p>Generated on: {{ date('Y-m-d') }}</p>

        <p>This report provides an overview of the books available in the library.</p>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Quantity Available</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category->title }}</td>
                        <td>{{ $book->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>For any inquiries or updates regarding the book inventory, please contact the library administrator.</p>
        <p>admin@gmail.com</p>
    </div>
@include('admin.footer')
</body>

</html>

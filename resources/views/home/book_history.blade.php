<!DOCTYPE html>
<html lang="en">

  <head>

   @include('home.css')

   <style>
.container {
        font-family: Arial, sans-serif;
        max-width: 300px;
        margin: 0 auto;
    }

    h2 {
        color: #fff;
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

    .table td {
        
        color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
        </style>
    
  </head>

<body>

  @include('home.header')
  

  <div class="item-details-page">
    <div class="container">
      <div class="row">

      @if(session()->has('message'))

        <div class="alert alert-success">

        {{session()->get('message')}}

        <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

        </div>

        @endif

            <div class="container">
            <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View <em>Request Status</em> Here.</h2>
          </div>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Book</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td class="centered-content">
                            <img src="book/{{$data->book->book_img}}" style="border-radius: 2px; min-width: 20px; max-width: 70px; max-height: 250px;"/>
                            {{$data->book->title}}
                        </td>
                        <td>{{$data->book->author}}</td>
                        <td>{{$data->status}}</td>
                        <td>
                            <a href="{{url('cancel_request', $data->id)}}" class="btn btn-warning">Cancel</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                
            </table>
            </div>
            </div>
       </div>
      </div>
    </div>
  
  @include('home.footer')
 

  

  </body>
</html>
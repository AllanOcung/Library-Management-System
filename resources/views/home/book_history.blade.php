<!DOCTYPE html>
<html lang="en">

  <head>

   @include('home.css')

   <style type="text/css">
    /* Styles for the table */
        #example {
            border-collapse: collapse;
            width: 100%;
        }

        /* Styles for table header */
        #example th {
            background-color: #f2f2f2;
            border: 0.5px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        /* Styles for table data */
        #example td {
            border: 1px solid #ddd;
            padding: 8px;
            color: white;
           
            margin: auto;
            text-align: center;
        }

       

        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center; /* Center the text within the column */
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

            <table id="example" class="table table-striped table-bordered" style="width:100%; margin-top: 100px;">
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

                            @if($data->status == 'pending')

                            <a href="{{url('cancel_request', $data->id)}}" class="btn btn-warning">Cancel</a>

                            @else
                                <p style="color: #ddd; font-weight: bold;">Not Allowed</p>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                
            </table>
      
       </div>
      </div>
    </div>
  
  @include('home.footer')
 

  

  </body>
</html>
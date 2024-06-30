<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .navbar-brand {
        color: white !important;
      }
      .nav-link {
        color: white !important;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TechField</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/customer') }}">Customer</a>

            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container">
      <a href="{{route('customer_create')}}">
      <button class="btn btn-primary float-right m-2">Add</button>

      </a>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>State</th>
            <th>Country</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($customer as $customer)
            <tr>
              <td>{{$customer->name}}</td>
              <td>{{$customer->email}}</td>
              <td>{{$customer->gender}}</td>
              <td>{{$customer->dob}}</td>
              <td>{{$customer->state}}</td>
              <td>{{$customer->country}}</td>
              <td>
              <a href="{{ route('customer_delete', ['id' => $customer->id]) }}">
    <button class="btn btn-danger">Delete</button>
</a>

                
<a href="{{route('customer_edit',['id'=>$customer->id])}}">               
<button class="btn btn-primary">Edit</button>
</a> 
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>

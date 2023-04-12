@extends('users.layout')
@section('content')
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Goods Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> List of Goods Sold by Megamarket Superstore </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <form action="/Goods/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ route('Goods.create')}}"> Add Goods </a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th><b>ID</b></th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
        @foreach ($goods as $goodss) 
            <tr>
                <td><b>{{$goodss->goods_code}}<b></td>
                <td>{{$goodss->goods_name}}</td>
                <td>{{$goodss->category}}</td>
                <td>{{$goodss->goods_price}}</td>
                <td>{{$goodss->qty}}</td>
                <td>
                    <form action="{{ route('Goods.destroy',$goodss->goods_code) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{ route('Goods.show', $goodss->goods_code)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('Goods.edit', $goodss->goods_code)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    </body>

</html>

@endsection
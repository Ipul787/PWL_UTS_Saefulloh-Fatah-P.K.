@extends('layouts.app')
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
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ route('goods.create')}}"> Add Goods </a>
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
            <th width="40px"><b>ID</b></th>
            <th width="180px">Name</th>
            <th width="100px">Category</th>
            <th width="100px">Price</th>
            <th >Quantity</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
        @foreach ($goods) 
            <tr>
                <td><b>{{$goods->goods_code}}.<b></td>
                <td>{{$goods->goods_name}}</td>
                <td>{{$goods->category}}</td>
                <td>{{$goods->price}}</td>
                <td>{{$goods->qty}}</td>
                <td>
                    <form action="{{ route('goods.destroy',$goods->goods_code) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{ route('goods.show', $goods->goods_code)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('goods.edit', $goods->goods_code)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
    </table>

    {!! $goods->links() !!}
    </div>
    </body>

</html>

@endsection
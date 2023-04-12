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
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Goods Detail</h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="goods_code" class="col-sm-2 col-form-label">Goods Code: </label>
            <div class="col-sm-10">
                {{$Goods->goods_code}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="goods_name" class="col-sm-2 col-form-label">Goods Name: </label>
            <div class="col-sm-10">
                {{$Goods->goods_name}}
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category: </label>
            <div class="col-sm-10">
                 {{$Goods->category}}
            </div>
        </div>
        <div class="form-group row">
            <label for="goods_price" class="col-sm-2 col-form-label">Goods Price: </label>
                <div class="col-sm-10">
                    {{$Goods->goods_price}}
                </div>
        </div>
        <div class="form-group row">
            <label for="qty" class="col-sm-2 col-form-label">Quantity: </label>
            <div class="col-sm-10">
                {{$Goods->qty}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('Goods.index')}}" class="btn  btn-success">Kembali</a>
            </div>
        </div>

    </div>
</body>
</html>

@endsection
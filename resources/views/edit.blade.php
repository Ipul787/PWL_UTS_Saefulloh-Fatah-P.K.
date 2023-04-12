@extends('users.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Goods Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit Goods Data</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> There is a problem with inputted data<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('Goods.update',$Goods->goods_code)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="goods_code" class="col-sm-2 col-form-label">Goods Code: </label>
                <div class="col-sm-10">
                    <input type="text" name="goods_code" class="form-control" id="goods_code" value="{{$Goods->goods_code}}" placeholder="Goods Code">
                </div>
            </div>
            <div class="form-group row">
                <label for="goods_name" class="col-sm-2 col-form-label">Goods Name: </label>
                <div class="col-sm-10">
                    <input type="text" name="goods_name"  class="form-control" id="goods_name" value="{{$Goods->goods_name}}" placeholder="Goods Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label">Category: </label>
                <div class="col-sm-10">
                    <select id="category" name="category"class="form-control">
                        <option {{$Goods->category == 'foods' ? 'selected' : ''}} value="foods"> Foods</option>
                        <option {{$Goods->category == 'drinks' ? 'selected' : ''}} value="drinks"> Drinks</option>
                        <option {{$Goods->category == 'snacks' ? 'selected' : ''}} value="snacks"> Snacks</option>
                        <option {{$Goods->category == 'seasoning' ? 'selected' : ''}} value="seasoning"> Seasoning</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="goods_price" class="col-sm-2 col-form-label">Price: </label>
                <div class="col-sm-10">
                    <input type="text" name="goods_price" class="form-control" value="{{$Goods->goods_price}}" id="goods_price" placeholder="Price">
                </div>
            </div>
            <div class="form-group row">
                <label for="qty" class="col-sm-2 col-form-label">Quantity: </label>
                <div class="col-sm-10">
                    <input type="text" name="qty" class="form-control" value="{{$Goods->qty}}" id="qty" placeholder="Quantity">
                </div>
            </div>
            <!--<div class="form-group row">
                <label for="gambarMahasiswa" class="col-sm-2 col-form-label">Pilih gambar</label>
                <div class="col-sm-10">
                    <input type="file" name="gambarMahasiswa">
                <p class="text-danger">{{ $errors->first('gambarMahasiswa') }}</p>
                </div>
            </div>-->

             <hr>
                <div class="form-group">
                    <a href="{{route('Goods.index')}}" class="btn btn-success">Back to Main Menu</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>
    </div>
    </body>
    </html>
@endsection
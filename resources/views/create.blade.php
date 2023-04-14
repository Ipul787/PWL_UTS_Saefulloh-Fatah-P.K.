@extends('users.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Goods Data</title>
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Add Goods Data</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> There is a problem with the input<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('Goods.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="goods_code" class="col-sm-2 col-form-label">Goods Code: </label>
                <div class="col-sm-10">
                    <input type="text" name="goods_code" class="form-control" id="goods_code" placeholder="Goods Code">
                </div>
            </div>
            <div class="form-group row">
                <label for="goods_name" class="col-sm-2 col-form-label">Goods Name: </label>
                <div class="col-sm-10">
                    <input type="text" name="goods_name" class="form-control" id="goods_name" placeholder="Goods Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label">Category: </label>
                <div class="col-sm-10">
                    <select id="category" name="category"class="form-control">
                      <option> </option>
                      <option value="foods"> Foods</option>
                      <option value="drinks"> Drinks</option>
                      <option value="snacks"> Snacks</option>
                      <option value="seasoning"> Seasoning</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="goods_price" class="col-sm-2 col-form-label">Price: </label>
                <div class="col-sm-10">
                    <input type="text" name="goods_price" class="form-control" id="goods_price" placeholder="Price">
                </div>
            </div>
            <div class="form-group row">
                <label for="qty" class="col-sm-2 col-form-label">Quantity: </label>
                <div class="col-sm-10">
                    <input type="text" name="qty" class="form-control" id="qty" placeholder="Quantity">
                </div>
            </div>

             <hr>
                <div class="form-group">
                    <a href="{{route('Goods.index')}}" class="btn btn-success">Back to Main Page</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
        </form>
    </div>
    </body>
    </html>
@endsection
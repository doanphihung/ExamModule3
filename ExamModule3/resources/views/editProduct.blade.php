<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add new product
        </div>
        <form class="text-left" method="post" action="{{route('product.update')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Name</label>
                <input type="text"
                       class="form-control"
                       value="{{old('name') ? old('name') : $product->name}}"
                       id="name"
                       name="name"
                       required>
            </div>

            <div class="form-group">
                <label for="inputTitle">Price</label>
                <input type="number"
                       class="form-control"
                       value="{{old('price') ? old('price') : $product->price}}"
                       id="price"
                       name="price"
                       required>
            </div>
            <div class="form-group">
                <label for="inputTitle">Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $key => $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputTitle">Image</label>
                <input type="file"
                       class="form-control"
                       id="image"
                       name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <a href="{{ route('home') }}"> <-Back </a>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>

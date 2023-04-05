@extends('admin.home')
@section('main-content')
    <form action="./save-edit-product?id={{$product->id}}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label for="email" class="control-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{$product->price}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <img src="{{$product->image}}" style="width: 200px;height: 200px;margin: 20px 0;">
        <div class="mb-3 form-group">
            <label for="" class="control-label">Image</label>
            <input class="form-control" type="file" name="image">
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Brand</label>
            <select name="brand_id" id="" class="form-control" required>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}" @if($brand->id == $product->brand_id) selected @endif>{{$brand->name}}</option>
                @endforeach
            </select>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
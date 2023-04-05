@extends('admin.home')
@section('main-content')
    <form action="./save-add-product" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label for="email" class="control-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Price</label>
            <input type="text" name="price" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Image</label>
            <input class="form-control" type="file" name="image" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Brand</label>
            <select name="brand_id" id="" class="form-control" required>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
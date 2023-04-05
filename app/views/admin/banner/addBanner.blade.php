@extends('admin.home')
@section('main-content')
    <form action="./save-add-banner" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="form-group">
            <label class="control-label">Image</label>
            <input type="file" name="image" class="form-control control-label" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Brand</label>
            <select name="brand_id" class="form-control control-label" required>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
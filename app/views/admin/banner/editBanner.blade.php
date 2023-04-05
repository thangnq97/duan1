@extends('admin.home')
@section('main-content')
    <form action="./save-edit-banner?id={{$banner->id}}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3 mt-3 form-group">
            <img style="width: 150px;height: 150px;" src="{{$banner->image}}">
        </div>
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">Brand</label>
            <select name="brand_id" class="form-control" required>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}"
                        @if($brand->id == $banner->brand_id)
                            selected
                        @endif    
                    >{{$brand->name}}</option>
                @endforeach
            </select>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
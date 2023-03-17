<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <form action="./save-add-product" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Detail</label>
                <textarea class="form-control" name="detail" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input class="form-control" type="file" name="image">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Brand</label>
                <select name="brand_id" id="" class="form-control">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualizar Hotel</title>
</head>
<body>
    <h1>Hotel Detail</h1>
    <form action="{{url('modificarHotel')}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="Name" value="{{$hotel->Name}}">
        </div>
        <div class="form-group">
            <label>City</label>
            <input class="form-control" type="text" name="City" id="" value="{{$hotel->City}}">
        </div>
        <div class="form-group">
            <label>Stars</label>
            <input class="form-control" type="number" name="Stars" min="1" max="10" value="{{$hotel->Stars}}">
        </div>
        <input type="hidden" name="id" value="{{$hotel->id}}"><br>
        <input class="btn btn-success" type="submit" value="Save">
    </form><br>
    <form action="{{url('mostrar')}}" method="GET">
        <input class="btn btn-secondary" type="submit" value="Cancel">
    </form>
</body>
</html>
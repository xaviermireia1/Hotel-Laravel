<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hoteles</title>
</head>
<body>
    <div>
        <form action="{{url('mostrar')}}" method="POST">
            @csrf
            {{method_field('GET')}}
            <div class="form-group">
                <p>City:</p>
                <input class="form-control" type="text" name="City">
            </div><br>
            <input class="btn btn-info" type="submit" value="Filtrar">
        </form><br>
        <form action="{{url('crear')}}" method="GET">
            <button class= "btn btn-secondary" type="submit" name="Crear" value="Crear">Crear</button>
        </form>
    </div>
    <div>
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">CITY</th>
                <th scope="col">STARS</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            @foreach($listaHoteles as $hotel)
                <tr>
                    <td scope="row">{{$hotel->id}}</td>
                    <td>{{$hotel->Name}}</td>
                    <td>{{$hotel->City}}</td>
                    <td>{{$hotel->Stars}}</td>
                    <td><form action="{{url('modificarHotel/'.$hotel->id)}}" method="GET">
                        <button class= "btn btn-secondary" type="submit" value="Edit">Edit</button>
                    </form></td>
                    <td><form action="{{url('eliminarHotel/'.$hotel->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class= "btn btn-danger" type="submit" value="Delete">Delete</button>
                    </form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
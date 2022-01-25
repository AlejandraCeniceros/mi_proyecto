<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <h1>Lista de noticias</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    
    <a href="{{route('noticias.create')}}"> Nueva noticia</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
                <tr>                    
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->autor}}</td>
                    <td>{{$noticia->fecha}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
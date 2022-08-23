<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('home') }}">torna alla Home</a>
    <a href="{{ route('gallery') }}">vai alla Galleria</a>
    <h1>ABOUT</h1>
    <div>
        Salve sono {{$name}} {{$lastname}} e questo è il collegamento ad un altra pagina
    </div>

</body>
</html>
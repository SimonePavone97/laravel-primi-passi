<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Hello World</h1>
    <a href="{{ route('home')}}">Home</a>

    <ul>
        @forelse ($students as $student)
        <li>{{$student}}</li>
        @empty
            <h3>Non ci sono studenti</h3>    
        @endforelse
    </ul>


    <a href="{{ route('Menu')}}">Menu</a>

</body>
</html>
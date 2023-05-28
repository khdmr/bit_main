<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nama Course:</h1>
    <h1>{{ $course->title }}</h1>
    <br>
    <h2>Nama Modul dan Materi:</h2>
    @foreach($course->modul as $modul)
        <h2>{{ $modul->name }}</h2>
        @foreach($modul->material as $material)
            <p>{{ $material->title }}</p>
        @endforeach
    @endforeach
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $course->title }}</title>
</head>
<body>
    {{-- @dd($course->modul->first()); --}}
    @if (auth()->user()->course->contains($course->id))
    <a href="/bootcamp/{{ $course->id }}/modul/{{ $modul->material->first()->id}}"><button >Masuk Kelas</button></a>

        
    @else
        
    <a href="/bootcamp/{{ $course->id }}/pembayaran"><button >Daftar</button></a>
    @endif
</body>
</html>
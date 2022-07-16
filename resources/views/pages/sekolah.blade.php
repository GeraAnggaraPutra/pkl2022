<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        @foreach ($nilai as $murid)
        <hr>
        Nama : {{ $murid['name'] }}<br>
        Jurusan : {{ $murid['jurusan'] }}<br>
        @php
        $nilai_s = 0;
        @endphp
        @foreach ($murid['data'] as $data)
        Mata pelajaran : {{ $data['mapel'] }}<br>
        nilai : {{ $data['nilai'] }}<br>
        
        @php
        $nilai_s += $data['nilai'];
        $nr = $nilai_s/4;
        @endphp
        @endforeach
               
        NILAI RATA - RATA : {{$nr}}<br>
        @if($nr >= 85 && $nr <= 100)
        Grade : A
        @elseif($nr >= 75 && $nr <= 84)
        Grade : B
        @elseif($nr >= 60 && $nr <= 75)
        Grade : C
        @elseif($nr >= 50 && $nr <= 59)
        Grade : D
        @elseif($nr >= 0 && $nr <=49)
        Grade : E
        @endif
        @endforeach
    </fieldset>
</body>
</html>
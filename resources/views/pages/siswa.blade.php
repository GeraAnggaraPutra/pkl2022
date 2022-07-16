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
        @foreach($siswa as $murid)
        nama : {{ $murid['name'] }} <br>
        umur : {{ $murid['age'] }} <br>
        @if( $murid['age'] > 17)
        keterangan : sudah bisa memiliki SIM
        @elseif( $murid['age'] < 17)
        keterangan : belum bisa memiliki SIM
        @endif
        <br>
        hobi :
        @foreach($murid['hobi'] as $hobi)
        <li>{{ $hobi }}</li>
        @endforeach
        <hr>
        @endforeach
    </fieldset>
</body>
</html>
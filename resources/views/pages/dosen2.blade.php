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
        <legend>Data Dosen</legend>
        @foreach($dosens as $dosen)
        <fieldset>
        Nama Dosen : {{ $dosen['namadosen']}} <br>
        Mata Kuliah : {{ $dosen['mata_kuliah']}} <br>
        </fieldset>
        Mahasiswa Bimbingan : <br>
        @php
        $nilai = 0
        @endphp
        @foreach($dosen['mahasiswa'] as $mahasiswa)
       <li> Nama Mahasiswa : {{ $mahasiswa['nama_mahasiswa']}} </li><br>
       <li> Nilai Skripsi : {{ $mahasiswa['nilai']}} </li><br>
        @php
        $nilai += $mahasiswa['nilai']
        @endphp
        @endforeach
        Nilai Rata - rata : {{ $nilai / count($dosen['mahasiswa'])}}
        <hr>
        @endforeach
    </fieldset>
</body>
</html>
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
    Nama Dosen : {{ $dosen['namadosen'] }} <br>
    Nomor Induk Pokok : {{ $dosen['nip'] }} <br>
    Mahasiswa : 
    @foreach($dosen['mahasiswa'] as $mahasiswa)
    <br>
    Nama Mahasiswa : {{ $mahasiswa['namamahasiswa']}} <br>
    Nomor Induk Pokok : {{ $mahasiswa['nip']}} <br>
    Nama Jurusan : {{ $mahasiswa['jurusan']}} <br>
    Mata Kuliah : 
    @foreach($mahasiswa['matakuliah'] as $matkul)
    <li>{{ $matkul }}</li>
    @endforeach
    @endforeach
    <hr>
    @endforeach
    </fieldset>
</body>
</html>
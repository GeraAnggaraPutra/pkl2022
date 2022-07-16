<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo(){
        $f = 1;
        $total = $f * 100;
        if($total >= 1000){
            return "Diatas seribu";
        }else{
            return "Dibawah seribu";
        }
    }

    public function profile(){
        return view('profile');
    }

    public function facebook($perkalian, $nama){
        $calculator = 1 + 5;
        $hasilperkalian = $calculator * $perkalian;
        $jk = 10;
        return view('about', compact('hasilperkalian','nama'));
    }

    public function siswa(){
        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 15, 'hobi' =>[
                'Membaca', 'Push Rank' , 'Bernyanyi',
            ]),
            array('id' => 2, 'name' => 'Dudung', 'age' => 18, 'hobi' => [
                'Renang', 'Futsal', 'Mancing', 'Turu',
            ])
        ];
        
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function berat($berat, $tinggi){
        $bmi = $berat / (($tinggi/100) * ($tinggi/100));
        if($bmi < 17.0){
            $status = "Kurus, kekurangan berat badan berat";
        }elseif($bmi >= 17.0 && $bmi <= 18.4){
            $status = "Kurus, kekurangan berat badan ringan";
        }elseif($bmi >= 18.5 && $bmi <= 25.0){
            $status = "Normal";
        }elseif($bmi >= 25.1 && $bmi <= 27.0){
            $status = "Gemuk, kelebihan berat badan tingkat ringan";
        }elseif($bmi >= 27.1){
            $status = "Gemuk, kelebihan berat badan tingkat berat";
        }

        return view('pages.berat', compact('berat','tinggi','status','bmi'));
    }

    public function dosen(){
        $a = [
          array('nip' => 112233, 'namadosen' => 'Ahmad Dani', 'mahasiswa' => [
            ['namamahasiswa' => 'Asep', 'nip' => 771122, 'jurusan' => 'Teknik Informatika',
            'matakuliah' => ['Biologi', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Rama', 'nip' => 771233, 'jurusan' => 'Teknik Mesin',
            'matakuliah' => ['Matematika', 'B. Inggris', 'Kimia']],
            ['namamahasiswa' => 'Febri', 'nip' => 881344, 'jurusan' => 'Psikologi',
            'matakuliah' => ['Bahasa Indonesia', 'Fisika', 'Sejarah']],
            ['namamahasiswa' => 'Saeful', 'nip' => 991455, 'jurusan' => 'Hukum',
            'matakuliah' => ['Geofisika', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Kevin', 'nip' => 661566, 'jurusan' => 'Teknik Listrik',
            'matakuliah' => ['Ekonomi', 'Fisika', 'Database']],
          ]),
          array('nip' => 115566, 'namadosen' => 'Dani', 'mahasiswa' => [
            ['namamahasiswa' => 'Asep', 'nip' => 551122, 'jurusan' => 'Teknik Informatika',
            'matakuliah' => ['Biologi', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Rama', 'nip' => 441233, 'jurusan' => 'Teknik Mesin',
            'matakuliah' => ['Matematika', 'B. Inggris', 'Kimia']],
            ['namamahasiswa' => 'Febri', 'nip' => 331344, 'jurusan' => 'Psikologi',
            'matakuliah' => ['Bahasa Indonesia', 'Fisika', 'Sejarah']],
            ['namamahasiswa' => 'Saeful', 'nip' => 221455, 'jurusan' => 'Hukum',
            'matakuliah' => ['Geofisika', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Kevin', 'nip' => 111566, 'jurusan' => 'Teknik Listrik',
            'matakuliah' => ['Ekonomi', 'Fisika', 'Database']],
          ]),
          array('nip' => 113344, 'namadosen' => 'Mahmud', 'mahasiswa' => [
            ['namamahasiswa' => 'Asep', 'nip' => 331122, 'jurusan' => 'Teknik Informatika',
            'matakuliah' => ['Biologi', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Rama', 'nip' => 551233, 'jurusan' => 'Teknik Mesin',
            'matakuliah' => ['Matematika', 'B. Inggris', 'Kimia']],
            ['namamahasiswa' => 'Febri', 'nip' => 881344, 'jurusan' => 'Psikologi',
            'matakuliah' => ['Bahasa Indonesia', 'Fisika', 'Sejarah']],
            ['namamahasiswa' => 'Saeful', 'nip' => 991455, 'jurusan' => 'Hukum',
            'matakuliah' => ['Geofisika', 'Fisika', 'Database']],
            ['namamahasiswa' => 'Kevin', 'nip' => 111566, 'jurusan' => 'Teknik Listrik',
            'matakuliah' => ['Ekonomi', 'Fisika', 'Database']],
          ]),
        ];

        return view('pages.dosen', ['dosens' => $a]);
    }
    
    public function dosen2(){
        $a = [
            array('namadosen' => "Yusuf Bachtiar", 'mata_kuliah' => 'Pemrograman Mobile', 'mahasiswa' => [
                ['nama_mahasiswa' => 'Muhammad Soleh', 'nilai' => 78],
                ['nama_mahasiswa' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama_mahasiswa' => 'Mamat Alkatiri', 'nilai' => 90]
            ]),
            array('namadosen' => "Yaris Riyadi", 'mata_kuliah' => 'Pemrograman web', 'mahasiswa' => [
                ['nama_mahasiswa' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama_mahasiswa' => 'Bruno Kasmir', 'nilai' => 90]
            ]),
        ];

        return view('pages.dosen2', ['dosens' => $a]);
    }
    public function sekolah(){
        $a = [
            
            array('name' => 'agus','jurusan' => 'TKR',
            'data' => 
            [
              ['mapel' => 'bahasa indonesia','nilai' => 80],
              ['mapel' => 'bahasa inggris','nilai' => 97],
              ['mapel' => 'produktif kejuruan','nilai' => 67],
              ['mapel' => 'matematika','nilai' => 100],

        ]
    ),

            array('name' => 'mahmud','jurusan' => 'TKR',
            'data' => 
            [
            ['mapel' => 'bahasa indonesia','nilai' => 78],
            ['mapel' => 'bahasa inggris','nilai' => 86],
            ['mapel' => 'produktif kejuruan','nilai' => 90],
            ['mapel' => 'matematika','nilai' => 67],

        ]
    ),

            array('name' => 'rendi','jurusan' => 'TSM',
            'data' => 
            [
            ['mapel' => 'bahasa indonesia','nilai' => 90],
            ['mapel' => 'bahasa inggris','nilai' => 50],
            ['mapel' => 'produktif kejuruan','nilai' => 65],
            ['mapel' => 'matematika','nilai' => 78],

        ]
    ),

            array('name' => 'firman','jurusan' => 'RPL',
            'data' => 
            [
            ['mapel' => 'bahasa indonesia','nilai' => 78],
            ['mapel' => 'bahasa inggris','nilai' => 90],
            ['mapel' => 'produktif kejuruan','nilai' => 56],
            ['mapel' => 'matematika','nilai' => 78],

        ]
    ),

    array('name' => 'abdul','jurusan' => 'RPL',
    'data' => 
    [
    ['mapel' => 'bahasa indonesia','nilai' => 89],
    ['mapel' => 'bahasa inggris','nilai' => 67],
    ['mapel' => 'produktif kejuruan','nilai' => 80],
    ['mapel' => 'matematika','nilai' => 90],

    ]
    )
        ];

        return view('pages.sekolah', ['nilai' => $a]);
    }

    public function belanjaan(Type $var = null)
    {
        $a =
            [
            ['nama_orang' => 'ALFIAN',
                'pembelian' => [
                    ['nama_barang' => 'SEPATU', 'merk' => 'VANS', 'harga_barang' => 250000],
                    ['nama_barang' => 'CELANA', 'merk' => 'CARDINAL', 'harga_barang' => 150000],
                    ['nama_barang' => 'KUPLUK', 'merk' => 'EIGER', 'harga_barang' => 100000],
                    ['nama_barang' => 'BAJU', 'merk' => 'BAONG', 'harga_barang' => 100000],
                ],
            ],
            ['nama_orang' => 'DIDA',
                'pembelian' => [
                    ['nama_barang' => 'TOPI', 'merk' => 'VANS', 'harga_barang' => 100000],
                    ['nama_barang' => 'CELANA', 'merk' => 'H&M', 'harga_barang' => 75000],
                    ['nama_barang' => 'BAJU', 'merk' => '3SECOND', 'harga_barang' => 125000],
                ],
            ],
        ];
        return view('pages.belanjaan', ['belanjaan' => $a]);

    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Nota</legend>
        @foreach ($belanjaan as $barang)
            <hr>
            @php
                $total=0;
            @endphp
            nama Pembeli : {{$barang['nama_orang']}} <br><hr>
            @foreach ($barang['pembelian'] as $jenis)
            

                <ul>
                    <li>
                        {{$jenis['nama_barang']}}
                    </li>wy
                </ul>
                Merk : {{$jenis['merk']}} <br>
                Harga barang: {{$jenis['harga_barang']}} <br>
            @php
                $total+=$jenis['harga_barang'];
            @endphp
            TOTAL HARGA : {{  number_format($total) ,0,",","."}} <br>
            @endforeach
            @if ($total >= 250000)
                @php
                    $cashback = (5/100) * $total 
                @endphp 
            @elseif($total >= 50000)
                @php
                    $cashback = (5/100) * $total 
                @endphp 
            @endif
           CASHBACK :  {{  number_format($cashback),0,",","."  }} <br>
            TOTAL HARGA : {{ number_format($total - $cashback,0,",",".")  }}
        @endforeach
    </fieldset>
</body>
</html>
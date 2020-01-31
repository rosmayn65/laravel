<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Belanja</center><br>
    @foreach($minimarket as $data)
        code : {{$data->code}}<br>
        nama barang : {{$data->nama_barang}}<br>
        jenis barang : {{$data->jenis_barang}}<br>
        harga : {{$data->harga}}<br>
        qty : {{$data->qty}}<br>
        deskripsi : {{$data->deskripsi}}<br>
        total : {{$data->total}}<hr>
    @endforeach
</body>
</html>
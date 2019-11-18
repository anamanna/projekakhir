<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
<h1>Manajemen Produk</h1>
    
    <a href="{{url('/createproduk')}}"><button>Tambah(+)</button></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>            
            <th>Harga</th>          
            <th>Deskripsi</th> 
            <th>Action</th>
        </tr>
        @foreach ($dataProduk as $key => $produk)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $produk->gambar }}</td>
            <td>{{ $produk->nama }}</td>
            <td>{{ $produk->harga }}</td>           
            <td>{{ $produk->deskripsi }}</td>
            <td>
                <a href="{{url('/editproduk/'.$produk->id)}}"><button>Edit</button></a>
                <a href="{{url('/destroyproduk/'.$produk->id)}}"><button>Hapus</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
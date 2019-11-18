<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit </title>
</head>
<body>

<h1>Edit Barang</h1>  
@foreach($datasampah as $sampah)
<form action="{{url('/updatesampah')}}" method="post">
{{ csrf_field() }}	
			<br>
        <table border="2">
            <tr>
                <td colspan="2">
                   <center><h3>Ubah Data Sampah</h3></center>      
                </td>
            </tr>
                
            <td><input type="hidden" name="id" required value="{{$sampah->id}}"></td>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required value="{{$sampah->nama}}"></td>
            </tr>

            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" value="{{$sampah->harga_per_kilo}}"></td>
            </tr>
            
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" id="" cols="30" rows="10">{{$sampah->deskripsi}}</textarea></td>
            </tr>

            <tr>
                <td>Gambar</td>
                <td><input type="text" name="gambar" value="{{$sampah->gambar}}"></td>
            </tr>

            <tr colspan="2">                
                <td><button type="submit" class="btn btn-primary">Simpan</button></td> 
            </tr>
        </table>
    </form> 
    @endforeach
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah </title>
</head>
<body>

<h1>Form Tambah Barang</h1>

    
<form action="aksisimpan.php" method="post">
        <table border="2">
            <tr>
                <td colspan="2">
                   <center><h3>Tambahkan Jenis Sampah</h3></center>      
                </td>
            </tr>

            <tr>
                <td>ID</td>
                <td><input type="number" name="id" required></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" id="" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td>Gambar</td>
                <td><input type="text" name="gambar"></td>
            </tr>

            <tr colspan="2">
                <td><center><button>Simpan</button></center></td>
            </tr>
        </table>
    </form> 
    
</body>
</html>

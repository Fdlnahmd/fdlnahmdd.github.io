<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
</head>
<body><center>
<button><a href="http://localhost:83/PHP%20SENTRA/Home%20JKW.php">Home</a></button><br>
<button>
<a href="http://localhost:83/PHP%20SENTRA/Project%20sentra.php">Log Out</a></button>
<button><a href="http://localhost:83/PHP%20SENTRA/about%20us.php">About Us</a></button>
<button><a href="http://localhost:83/PHP%20SENTRA/Kritik%20Dan%20Saran.php">Kritik Dan Saran</a></button>
    <form action="Output Pemesanan.php" method="post">
    <table border="1">
        <tr>
    <td><a href="#penutup"><center>Minuman</center></a>
        <h1><center>Makanan</center></h1><hr>
    <center><img src="paket ayam.jpg"><br>
    <input type="checkbox" name="mkn1" value="Paket Ayam">Paket Ayam<br>
    <img src="paket anak.jpg"><br>
    <input type="checkbox" name="mkn2" value="Paket Anak - anak">Paket Anak - anak<br>
    <img src="paket bucket.jpg"><br>
    <input type="checkbox" name="mkn3" value="Paket Bucket">Paket Bucket<br>
    <img src="paket geprek.jpg"><br>
    <input type="checkbox" name="mkn4" value="Paket Ayam Geprek">Paket Ayam Geprek<br>
    <img src="paket ricebox.jpg" height="200" width="200"><br>    
    <input type="checkbox" name="mkn5" value="Paket Ricebox">Paket Ricebox</center><br>
    <br></td>
</tr>
    <td><h1 id="penutup" ><center>Minuman & Dessert</center></h1><hr>
    <center><img src="es teh.jpg"><br>
    <input type="checkbox" name="m&d1" value="Es Teh Manis">Es Teh Manis
    <input type="checkbox" name="m&d2" value="Es Teh Tawar">Es Teh Tawar<br>
    <img src="teh.jpg" height="200" width="200" ><br>
    <input type="checkbox" name="m&d3" value="Teh Manis">Teh Manis
    <input type="checkbox" name="m&d4" value="Teh Tawar">Teh Tawar<br>
    <img src="es krim.jpg"><br>
    <input type="checkbox" name="m&d5" value="Es Krim Cone">Es Krim Cone<br>
    <img src="milkshake.jpg"><br>
    <input type="checkbox" name="m&d6" value="Milkshake Strawberry">Milkshake Strawberry<br>
    <input type="checkbox" name="m&d7" value="Milkshake Vanilla">Milkshake Vanilla<br>
    <input type="checkbox" name="m&d8" value="Milkshake Coklat">Milkshake Coklat<br>
    <img src="pudding.jpg"><br>
    <input type="checkbox" name="m&d9" value="Pudding Caramel">Pudding Caramel</center>
    <br><a href="#top"><center>Makanan</center></a><br></td></tr><br>
    <td><center>Tipe Pembayaran : <br>
    <input type="radio" name="tipepby" value="Ovo">Ovo
    <input type="radio" name="tipepby" value="Atm/Debit">Atm/Debit
    <input type="radio" name="tipepby" value="Gopay">Gopay
    <input type="radio" name="tipepby" value="Shopeepay">Shopeepay
    <input type="radio" name="tipepby" value="Cash On Delivery">Cash On Delivery
    <br>
    <br>
    Nama Pengirim : 
    <input type="text" name="nama" size="10">
    <br>
    Alamat : 
    <input type="text" name="alamat" size="10">
    <br>
    <input type="submit" value="Pesan"></td></center></table>
    <br>
    <hr></center>
</form>
</body>
<footer><center>
©JKW Fried Chicken 2022
</center></footer>
</html>
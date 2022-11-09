<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Pemesanan</title>
</head>
<body><center>
    <table border="1">
    <button><a href="http://localhost:83/PHP%20SENTRA/Home%20JKW.php">Home</a></button>
    <br>
Jumlah Pemesanan :
<br>
    <td><center><?php
    if(isset($_POST['mkn1']))
        echo $_POST['mkn1']."<br/>";
    if(isset($_POST['mkn2']))
        echo $_POST['mkn2']."<br/>";
    if(isset($_POST['mkn3']))
        echo $_POST['mkn3']."<br/>";
    if(isset($_POST['mkn4']))
        echo $_POST['mkn4']."<br/>";
    if(isset($_POST['mkn5']))
        echo $_POST['mkn5']."<br/>";
    if(isset($_POST['m&d1']))
        echo $_POST['m&d1']."<br/>";
    if(isset($_POST['m&d2']))
        echo $_POST['m&d2']."<br/>";
    if(isset($_POST['m&d3']))
        echo $_POST['m&d3']."<br/>";
    if(isset($_POST['m&d4']))
        echo $_POST['m&d4']."<br/>";
    if(isset($_POST['m&d5']))
        echo $_POST['m&d5']."<br/>";
    if(isset($_POST['m&d6']))
        echo $_POST['m&d6']."<br/>";
    if(isset($_POST['m&d7']))
        echo $_POST['m&d7']."<br/>";
    if(isset($_POST['m&d8']))
        echo $_POST['m&d8']."<br/>";
    if(isset($_POST['m&d9']))
        echo $_POST['m&d9']."<br/>";
    ?></center>
    <br>
    <hr>
    <center>
    Tipe Pembayaran : <br>
    <?php echo $_POST['tipepby']?>
    <br>
    <br>
    Nama Pengirim : <br>
    <?php echo $_POST["nama"]?>
    <br>
    <br>
    Alamat Tujuan: <br>
    <?php echo $_POST["alamat"]?></center></td>
</table>
    <h1>Terima Kasih Sudah Memesan</h1>
</center>
</body>
<footer><center>
©JKW Fried Chicken 2022
</center></footer>
</html>
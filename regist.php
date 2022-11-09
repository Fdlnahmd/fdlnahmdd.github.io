<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Form Registrasi Lomba
    <br>
    Angkatan 30
</h1>

<form action="postproses.php" method="post">
Username : 
<input type="text" name="username" size="10">
<br>
Password :
<input type="password" name="password" size="10">
<br>
Gender :
<br>
<input type="radio" name="gender" value="Laki - Laki" checked>Laki - Laki
<br>
<input type="radio" name="gender" value="Perempuan" checked>Perempuan    
<br>
Lomba Yang Diikuti :
<br>
<input type="checkbox" value="Bulu Tangkis" name="lomba1">Bulu Tangkis
<br>
<input type="checkbox" value="Sepak Bola" name="lomba2">Sepak Bola
<br>
<input type="checkbox" value="Basket" name="lomba3">Basket
<br>
<input type="checkbox" value="Tarik Tambang" name="lomba4">Tarik Tambang
<br>
Kelas :
<select name="kls">
    <option value="XIT1">XI TEL 01 </option>
    <option value="XIT2">XI TEL 02 </option>
    <option value="XIT3">XI TEL 03 </option>
    <option value="XIT4">XI TEL 04 </option>
    <option value="XIT5">XI TEL 05 </option>
    <option value="XIT6">XI TEL 06 </option>
    <option value="XIT7">XI TEL 07 </option>
    <option value="XIT8">XI TEL 08 </option>
    <option value="XIT9">XI TEL 09 </option>
    <option value="XIT10">XI TEL 10 </option>
    <option value="XIT11">XI TEL 11 </option>
    <option value="XIT12">XI TEL 12 </option>
    <option value="XIT13">XI TEL 13 </option>
</select>
<br>
Tambahan Data Siswa :
<br>
<textarea name="DDS" cole="40" rows="5">
</textarea>
<br>
<input type="submit" value="Proses">
</form>




</body>
</html>
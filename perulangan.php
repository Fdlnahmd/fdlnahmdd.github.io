<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<center>";
echo"<table border='1'>";
echo"<tr><td>A<td>A^2<td>A*2</tr>";
for($a=1;$a<=10;$a++)
{$pangkat=$a*$a;
$kali2=$a*2;

echo"<tr><td>$a<td>$pangkat<td>$kali2</tr>";
}
echo"</table>";
echo"</center>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>    
    Username :<?php echo $_POST["username"]?>
    <br>
    <br>
    Password :<?php echo $_POST["password"]?>
    <br>
    <br>
    Gender :<?php echo$_POST["gender"]?>
    <br>
    <br>
    Lomba Yang Diikuti :
    <br>
    <?php
    if(isset($_POST['lomba1']))
        echo $_POST['lomba1']."<br/>";
    if(isset($_POST['lomba2']))
        echo $_POST['lomba2']."<br/>";
    if(isset($_POST['lomba3']))
        echo $_POST['lomba3']."<br/>";
    if(isset($_POST['lomba4']))
        echo $_POST['lomba4']."<br/>";
    ?>
    <br>
    Kelas :
    <?php 
    $data = $_POST["kls"];
    echo $data;
    ?>
    <br>
    <br>
    <textarea name="Komen" cole="40" rows="5">
<?php
$DDS=$_POST["DDS"];
echo $DDS ?>
</textarea>
</center>
</body>
</html>
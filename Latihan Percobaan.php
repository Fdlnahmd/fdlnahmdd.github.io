<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Percabangan</title>
</head>
<body>
    <?php
    $nis = "539211130";
    $nama = "Fadlan Achmad Frizal";
    $kelas = "XI T8";
    $nilai_tugas = "80";
    $nilai_pts = "86";
    $nilai_pas = "90";
    $kali_tugas = "20";
    $kali_pts = "30";
    $kali_pas = "50";
    $bagi_nilai = "100";
    $grade_a = "<h4>Grade A</h4>";
    $grade_b = "<h4>Grade B</h4>";
    $grade_c = "<h4>Grade C</h4>";
    $grade_d = "<h4>Grade D</h4>";
    $ket_lulus = "<h4>Anda Lulus</h4>";
    $ket_tdk_lulus = "<h4>Anda Tidak Lulus</h4>";
    $hasil_akhir = $nilai_tugas*$kali_tugas/$bagi_nilai+$nilai_pts*$kali_pts/$bagi_nilai+$nilai_pas*$kali_pas/$bagi_nilai;

    echo "<h4>Hitung Nilai Akhir</h4>";
    echo "<h4> NIS = $nis </h4>";
    echo "<h4> Nama = $nama </h4>";
    echo "<h4> Kelas = $kelas </h4>";
    echo "<h4> Nilai Tugas = $nilai_tugas </h4>";
    echo "<h4> Nilai PTS = $nilai_pts </h4>";
    echo "<h4> Nilai PAS = $nilai_pas </h4>";
    echo "<h4> Nilai Akhir = $hasil_akhir </h4>";
    if($hasil_akhir <= 70)
        echo "$grade_d";
        
    elseif($hasil_akhir <= 80)
        echo "$grade_c";
    
    elseif($hasil_akhir <=90)
        echo "$grade_b";
    
    elseif($hasil_akhir >=90)
        echo "$grade_a";
    
    if($grade_b)
        echo "$ket_lulus"; 
    elseif($grade_d)
        echo "$ket_tdk_lulus";
    elseif($grade_c)
        echo "$ket_lulus";   
    elseif($grade_a)
        echo "$ket_lulus";
    ?>
</body>
</html> 
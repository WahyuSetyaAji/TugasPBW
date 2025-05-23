<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 11</title>
</head>
<body>
    <?php
    $hari = "jum'at";

    switch ($hari) {
   case "Senin":
       echo "Hari pertama kerja!";
       break;
   case "jum'at":
       echo "Solat jumat!";
       break;
   case "Minggu":
       echo "Libur akhir pekan!";
       break;
   default:
       echo "Hari biasa.";
   }
    ?>
    
    <?php
    for ($i = 1; $i <= 5; $i++) {
   echo "Angka ke-”.$i.”<br>";
}
    ?>
     <?php
    $buah = ["Apel", "Jeruk", "Mangga"];


    for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i] . "<br>";
}

$nilai = 1;

while ($nilai <= 5) {
   echo "Nilai: ". $nilai ."<br>";
   $nilai++;
}

    $mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}
$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";

?>
echo $status;
<?php
 include 'nama_file.php';
require 'nama_file.php';
?>
 <?php include 'menu.php'; ?>
    <?php
echo '<a href="index.php">Beranda</a> | <a href="about.php">Tentang</a> | <a href="contact.php">Kontak</a>';
?>


</body>
</html>

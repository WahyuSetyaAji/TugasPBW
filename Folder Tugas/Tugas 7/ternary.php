<!DOCTYPE html>
<html>
<head>
    <title>Cek Genap atau Ganjil</title>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h2>Menentukan Genap atau Ganjil</h2>
    <?php
    $angka = 7;
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

    echo "Angka $angka adalah $hasil";
    ?>
</body>
</html>

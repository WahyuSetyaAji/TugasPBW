<!DOCTYPE html>
<html>
<head>
    <title>Daftar Hewan</title>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h2>Daftar Nama Hewan</h2>
    <?php
    $hewan = ["Kucing", "Anjing", "Kelinci", "Sapi", "Gajah"];

    foreach ($hewan as $nama) {
        echo $nama . "<br>";
    }
    ?>
</body>
</html>

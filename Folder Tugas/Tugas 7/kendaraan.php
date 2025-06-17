<!DOCTYPE html>
<html>
<head>
    <title>Jenis Kendaraan</title>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h2>Menentukan Jenis Kendaraan</h2>
    <?php
    $jumlah_roda = 2;

    switch ($jumlah_roda) {
        case 2:
            echo "Jenis kendaraan: Sepeda motor";
            break;
        case 3:
            echo "Jenis kendaraan: Bajaj";
            break;
        case 4:
            echo "Jenis kendaraan: Mobil";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui";
    }
    ?>
</body>
</html>

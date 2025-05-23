<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
</head>
<body>
    <?php 
    define("pajak", 0.1);

    $barang = [
        "nama" => "keyboard",
        "harga" => 150000,
        "jumlah" => 2,
    ];

    $s_pajak = $barang["harga"] * $barang["jumlah"];
    $pajak = $s_pajak * pajak;
    $total = $s_pajak + $pajak;

?>

<!DOCTYPE html>
<html lang="en"> 
<title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .kotak {
            border: 1px solid #000;
            padding: 20px;
            width: fit-content;
        }
        hr {
            border: 1px solid #000;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <h3>Perhitungan Total Pembelian (Dengan Array)</h3>
        <hr>
        <p>Nama Barang: <?= $barang["nama"]; ?></p>
        <p>Harga Satuan: <?= ($barang["harga"]); ?></p>
        <p>Jumlah Beli: <?= $barang["jumlah"]; ?></p>
        <p>Total Harga (Sebelum Pajak): <?= ($s_pajak); ?></p>
        <p>Pajak (10%): <?= ($pajak); ?></p>
        <p><strong>Total Bayar: <?= ($total); ?></strong></p>
    </div>
</body>
</html>
</body>
</html>
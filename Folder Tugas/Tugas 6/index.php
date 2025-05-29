<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h2 {
            color: #333;
        }
        form {
            background: #f4f4f4;
            padding: 20px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        input[type=text], input[type=number] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .hasil {
            margin-top: 30px;
            padding: 20px;
            background: #e7f3ff;
            border-left: 4px solid #2196F3;
        }
    </style>
</head>
<body>

<h2>Form Data Mahasiswa dan Diskon UKT</h2>

<form method="post" action="">
    NPM:<br>
    <input type="text" name="npm" required><br>
    Nama:<br>
    <input type="text" name="nama" required><br>
    Prodi:<br>
    <input type="text" name="prodi" required><br>
    Semester:<br>
    <input type="number" name="semester" min="1" required><br>
    Biaya UKT (Rp):<br>
    <input type="number" name="ukt" min="0" required><br>
    <input type="submit" value="Proses">
</form>

<?php
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $semester = $_POST["semester"];
    $ukt = $_POST["ukt"];

    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5; 
        }
    }

    $potongan = $ukt * $diskon / 100;
    $bayar = $ukt - $potongan;

    echo "<div class='hasil'>";
    echo "<h3>Hasil Perhitungan Diskon:</h3>";
    echo "<strong>NPM:</strong> " . htmlspecialchars($npm) . "<br>";
    echo "<strong>Nama:</strong> " . htmlspecialchars($nama) . "<br>";
    echo "<strong>Prodi:</strong> " . htmlspecialchars($prodi) . "<br>";
    echo "<strong>Semester:</strong> $semester<br>";
    echo "<strong>Biaya UKT:</strong> " . formatRupiah($ukt) . "<br>";
    echo "<strong>Diskon:</strong> $diskon%<br>";
    echo "<strong>Total yang harus dibayar:</strong> " . formatRupiah($bayar);
    echo "</div>";
}
?>

</body>
</html>

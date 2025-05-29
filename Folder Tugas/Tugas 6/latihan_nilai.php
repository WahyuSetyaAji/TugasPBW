<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai Mahasiswa</title>
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
            background-color: #007BFF;
            color: white;
            padding: 10px 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .hasil {
            margin-top: 30px;
            padding: 20px;
            background: #e9f9f2;
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body>

<h2>Form Input Nilai Mahasiswa</h2>

<form method="post" action="">
    Nama:<br>
    <input type="text" name="nama" required><br>
    Nilai:<br>
    <input type="number" name="nilai" min="0" max="100" required><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $nilai = $_POST["nilai"];

    $predikat = "";
    $status = "";

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilai >= 50) {
        $predikat = "D";
        $status = "Tidak Lulus";
    } elseif ($nilai >= 0) {
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Tidak Valid";
        $status = "-";
    }

    echo "<div class='hasil'>";
    echo "<h3>Hasil Penilaian:</h3>";
    echo "<strong>Nama:</strong> $nama<br>";
    echo "<strong>Nilai:</strong> $nilai<br>";
    echo "<strong>Predikat:</strong> $predikat<br>";
    echo "<strong>Status:</strong> $status";
    echo "</div>";
}
?>

</body>
</html>

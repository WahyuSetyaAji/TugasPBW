<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 12</title>
</head>
<body>
    $var_nama = $_POST['nama'];
    $var_email = $_POST['email'];
    
    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
        $status = "Tidak Lulus";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Tidak valid";
        $status = "Tidak ada Status";
    }
</body>
</html>
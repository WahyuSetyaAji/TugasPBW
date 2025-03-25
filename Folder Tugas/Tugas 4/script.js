function cekNilai() {
    let nim = document.getElementById("nim").value.trim();
    let nilai = document.getElementById("nilai").value.trim();
    let output = document.getElementById("output");

    // Jika NIM tidak memiliki tepat 13 angka, tampilkan "Nilai tidak valid!"
    if (!/^\d{13}$/.test(nim)) {
        output.innerHTML = "Nilai tidak valid!";
        output.style.color = "red";
        return;
    }

    // Jika nilai bukan angka
    if (!/^\d+$/.test(nilai)) {
        output.innerHTML = "Nilai tidak valid!";
        output.style.color = "red";
        return;
    }

    nilai = parseInt(nilai);

    // Jika nilai di luar rentang 0-100
    if (nilai < 0 || nilai > 100) {
        output.innerHTML = "Nilai tidak valid!";
        output.style.color = "red";
        return;
    }

    let hurufMutu;
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    output.innerHTML = `NIM: ${nim} <br> Huruf Mutu: ${hurufMutu}`;
    output.style.color = "green";
}

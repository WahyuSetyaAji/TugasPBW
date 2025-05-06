// Fungsi salam
function salam() {
    alert("Selamat datang di latihan JavaScript!");
  }
  
  // Contoh penggunaan let dan const
  function ujiVariabel() {
    let x = 10;
    if (true) {
      let x = 20;
      console.log("Nilai x di dalam blok:", x); // 20
    }
    console.log("Nilai x di luar blok:", x); // 10
  
    const z = 100;
    try {
      z = 200; // Akan error
    } catch (e) {
      console.log("Error saat mengubah const:", e.message);
    }
  }
  
  // Tipe data primitif dan non-primitif
  function tampilkanTipeData() {
    let nama = "Rina"; // string
    let umur = 21;     // number
    let aktif = true;  // boolean
    let buah = ["Apel", "Mangga", "Jeruk"]; // array
    let mahasiswa = { nama: "Budi", jurusan: "Informatika" }; // object
  
    console.log("Nama:", nama);
    console.log("Umur:", umur);
    console.log("Status aktif:", aktif);
    console.log("Buah favorit:", buah[1]);
    console.log("Mahasiswa:", mahasiswa.nama, "-", mahasiswa.jurusan);
  }
  
  // Fungsi penjumlahan kalkulator
  function jumlahkan() {
    let a = parseInt(document.getElementById("num1").value);
    let b = parseInt(document.getElementById("num2").value);
    let hasil = a + b;
    document.getElementById("hasil").innerText = isNaN(hasil) ? "Masukkan angka valid!" : hasil;
  }
  
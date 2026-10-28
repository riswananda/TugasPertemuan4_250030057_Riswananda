<?php

// Class Buku
class Buku {
    public $judul;
    public $pengarang;
    public $tahun;

    public function tampilkanInfo() {
        echo "Judul: " . $this->judul . "<br>";
        echo "Pengarang: " . $this->pengarang . "<br>";
        echo "Tahun: " . $this->tahun . "<br>";
    }
}

// Class Anggota
class Anggota {
    public $nama;
    public $nim;
    public $alamat;

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
    }
}

// Class Peminjaman
class Peminjaman {
    public $buku;
    public $anggota;
    public $tanggalPinjam;

    public function tampilkanInfo() {
        echo "Buku: " . $this->buku . "<br>";
        echo "Nama Anggota: " . $this->anggota . "<br>";
        echo "Tanggal Pinjam: " . $this->tanggalPinjam . "<br>";
    }
}

// Object Buku
$buku = new Buku();
$buku->judul = "Bali Indah Lestari";
$buku->pengarang = "I Whayan Khosther";
$buku->tahun = 2026;

// Object Anggota
$anggota = new Anggota();
$anggota->nama = "I Gusti Agung Ngurah Riswananda";
$anggota->nim = "250030057";
$anggota->alamat = "Jl. Raya Puputan No.86";

// Object Peminjaman
$peminjaman = new Peminjaman();
$peminjaman->buku = $buku->judul;
$peminjaman->anggota = $anggota->nama;
$peminjaman->tanggalPinjam = "22-10-2026";

// Menampilkan informasi
echo "<h3>Data Buku</h3>";
$buku->tampilkanInfo();

echo "<hr>";

echo "<h3>Data Anggota</h3>";
$anggota->tampilkanInfo();

echo "<hr>";

echo "<h3>Data Peminjaman</h3>";
$peminjaman->tampilkanInfo();

?>
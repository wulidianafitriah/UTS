<?php
// Mengambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat-lahir"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $agama = htmlspecialchars($_POST["agama"]);
    $no_HP = htmlspecialchars($_POST["no_HP"]);
    $nama_ayah = htmlspecialchars($_POST["nama_ayah"]);
    $pekerjaan_ayah = htmlspecialchars($_POST["pekerjaan_ayah"]);
    $nama_ibu = htmlspecialchars($_POST["nama_ibu"]);
    $pekerjaan_ibu = htmlspecialchars($_POST["pekerjaan_ibu"]);

// Menampilkan data dalam tabel vertikal
    echo "<table>";
    echo "<tr><td><strong>Nama Lengkap:</strong></td><td>$nama</td></tr>";
    echo "<tr><td><strong>Tempat, Tanggal Lahir:</strong></td><td>$tempat_lahir, $tanggal_lahir</td></tr>";
    echo "<tr><td><strong>Jenis Kelamin:</strong></td><td>$jenis_kelamin</td></tr>";
    echo "<tr><td><strong>Alamat:</strong></td><td>$alamat</td></tr>";
    echo "<tr><td><strong>Agama:</strong></td><td>$agama</td></tr>";
    echo "<tr><td><strong>Nomor HP:</strong></td><td>$nomor_HP</td></tr>";
    echo "<tr><td><strong>Nama Ayah:</strong></td><td>$nama_ayah</td></tr>";
    echo "<tr><td><strong>Pekerjaan Ayah:</strong></td><td>$pekerjaan_ayah</td></tr>";
    echo "<tr><td><strong>Nama Ibu:</strong></td><td>$nama_ibu</td></tr>";
    echo "<tr><td><strong>Pekerjaan Ibu:</strong></td><td>$pekerjaan_ibu</td></tr>";
    echo "</table>";

    echo "<p class='succes-message'><strong><Pendaftaran berhasil!<strong></p>";
    echo '<a href="index.html" class="back-link">Kembali ke FOrmulir<a/>';
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    header("Location: index.html");
    exit;
}
<?php
// Konfigurasi database
$host = 'localhost';       // Host database (biasanya 'localhost')
$username = 'root';        // Username database (default: 'root' untuk XAMPP)
$password = '';            // Password database (kosong jika pakai XAMPP default)
$database = 'db_crud'; // Nama database

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);


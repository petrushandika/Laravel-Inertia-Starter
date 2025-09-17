<?php
$host = 'localhost';
$dbname = 'test';
$user = 'root';
$pass = 'password';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>

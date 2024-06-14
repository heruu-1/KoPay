<?php
session_start(); // Mulai sesi

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login admin
header("location:auth/login_customer.php");
exit(); // Pastikan untuk keluar dari skrip setelah melakukan redirect
?>

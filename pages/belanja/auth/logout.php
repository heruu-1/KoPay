<?php
session_start(); // Mulai sesi

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login admin
header("location:login_admin.php");
exit(); // Pastikan untuk keluar dari skrip setelah melakukan redirect
?>

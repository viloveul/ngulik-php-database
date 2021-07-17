<?php

defined('DBUSER') or define('DBUSER', 'root');
defined('DBPASSWORD') or define('DBPASSWORD', 'p4ssword');
defined('DBSOURCE') or define('DBSOURCE', 'mysql:host=127.0.0.1;port=1001;dbname=belajar');

try {
	// Membuat sebuah koneksi menggunakan class PDO
	return new PDO(DBSOURCE, DBUSER, DBPASSWORD);
} catch (PDOException $e) {
	// PDO akan memunculkan sebuah error berupa PDOException jika gagal melakukan koneksi
	die($e->getMessage());
}
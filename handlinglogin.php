<?php
$username = @$_POST['username'];
$password = @$_POST['password'];
$ingatsaya = @$_POST['ingatsaya'];

$username_seharusnya = 'ririn';
$password_seharusnya = 'rindu';

if ($username == $username_seharusnya and $password == $password_seharusnya) {

	if ($ingatsaya == 'Y') {
		setcookie('username', $username, time() + 86000, "/");
		setcookie('password', $password, time() + 86000, "/");
	}

	session_start();

	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	echo "<script>alert('Kamu berhasil login!');</script>";
	echo "<script>location.href='./main.php?halaman=home';</script>";
} else {
	echo "<script>alert('Username atau password anda salah. Klik untuk kembali ke halaman login');</script>";
	echo "<script>location.href='./index.php';</script>";
}

<?php
session_start();
session_destroy();
unset($_SESSION);

unset($_COOKIE['username']);
setcookie('username', null, -1, '/');

unset($_COOKIE['password']);
setcookie('password', null, -1, '/');

echo "<script>alert('Kamu berhasil log out!');</script>";
echo "<script>location.href='./index.php';</script>";

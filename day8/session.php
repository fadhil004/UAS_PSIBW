<?php

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if (isset($_SESSION['username']) and $_SESSION['password']){
    echo "Selamat berhasil login wak";
    echo "</br>";
    echo "<a href=\"logout.php\">Logout</a>";
} else {
    echo "Login dulu lahh...";
}

?>
<h1>Prediksi Hero</h1>
<p>Masukkan Nama hero</p>

<form action="day7.php" method="POST">
    Nama Hero: <input type="text" name="nama"> <br>
    <input type="submit">
</form>

<?php

if (isset($_POST["nama"])) {
    $namaHero = $_POST["nama"];
    echo "Pasti nama hero kamu : " . $namaHero;
}

?>
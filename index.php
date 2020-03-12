<?php

require_once 'config/connection.php';
$con = new connection();

if(!empty($_POST)){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $con->query("INSERT INTO menu (nama,harga) values(
        '{$nama}',$harga)");
}

?>

<form action="" method="post">
    <label for="">Menu Makanan</label><br>
    <input type="text" name="nama"><br>
    <label for="">harga</label><br>
    <input type="number" name="harga"><br><br>
    <button type="submit">Simpan</button>
    
    

</form>
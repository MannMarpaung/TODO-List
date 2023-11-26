<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `tabletodo`(`list`) VALUES ('$LIST')");

//Menentukan halaman mana yang dituju setelah data dikirim
header("location:index.php")

?>
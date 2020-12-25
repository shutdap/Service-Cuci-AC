<?php

$con=new mysqli("localhost","root","","skripsi1");

if ($con->connect_error){
    die("gagal konek".$con->connect_error);
}
?>
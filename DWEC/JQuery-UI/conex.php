<?php
function Conecta() {
    $mysqli = mysqli_connect(
        "127.0.0.1", "root", "", "biblioteca");
        
    mysqli_set_charset($mysqli, 'utf8');
    return $mysqli;
}
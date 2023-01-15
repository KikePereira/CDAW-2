<?php

$mysqli = new mysqli("localhost", 'root', '', 'biblioteca');
mysqli_set_charset($mysqli,'UTF8');
$query = "SELECT * FROM libros";
$libros = [];
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $libros[] = array('codigo'=> $row['codigo'], 'titulo'=> $row['titulo'],'autor'=>$row['autor'],'editorial'=>$row['editorial'],'paginas'=>$row['paginas'],'anno'=>$row['anno']);
    }

$result->free();
$libros2=json_encode($libros);
echo $libros2;
}
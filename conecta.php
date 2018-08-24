<?php
$localhost = "localhost";
$usuario = "root";
$senha = "";
$database = "teste";

$link = mysqli_connect($localhost , $usuario , $senha , $database) or die("Não foi possivel realizar conexão com o banco");
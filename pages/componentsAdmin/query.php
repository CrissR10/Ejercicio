<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}

conectar();
$id = $_SESSION['id_usuario'];
ini_set('date.timezone', 'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$dateFront = date('d-m-Y H:i:s');

//query usuarios ------------------------------------------------------------------------------------------
$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $nombres = $row['nombres'];
    $aPaterno = $row['aPaterno'];
    $aMaterno = $row['aMaterno'];
    $usuario = $row['usuario'];
    $passUser = $row['pass'];
    $admin = $row['admin'];


    $nomComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
}
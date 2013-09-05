<?php
include("conectarse.php");
$link=Conectarse();
    $titulo = $_REQUEST['titulo'];
    $curso = $_REQUEST['curso'];
    $asignatura = $_REQUEST['asignatura'];
$Sql="insert into descargainformatica
(titulo,curso,asignatura) values
('$titulo','$curso','$asignatura')";
mysql_query($Sql,$link);

$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
    
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files
        $destino =  "datos/".$prefijo."_".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido: <b>".$archivo."</b>";
        } else {
            $status = "Error al subir el archivo";
        }
    } else {
        $status = "Error al subir archivo";
    }
}
header("Location: tec-informatica-descargas.php");
?>
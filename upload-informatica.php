<?php
include("conectarse.php");
$link=Conectarse();


$status = "";
if ($_POST["action"] == "upload") {

    // por cuestion de seguridad, siempre verificamos que tenga un file D:
    if($_FILES["archivo"]){

        // obtenemos los datos del archivo
        $tamano = $_FILES["archivo"]['size'];
        $tipo = $_FILES["archivo"]['type'];
        $archivo = $_FILES["archivo"]["name"];
        $prefijo = substr(md5(uniqid(rand())),0,6);
        
        // lo siguiente es para la query a la db

        $titulo = $_REQUEST['titulo'];
        $curso = $_REQUEST['curso'];
        $ruta = "datos/".$prefijo."_".$archivo;
        $asignatura = $_REQUEST['asignatura'];
        $Sql="insert into descargainformatica
        (titulo,curso,asignatura,ruta) values
        ('".$titulo."','".$curso."','".$asignatura."', '".$ruta."')";
        mysql_query($Sql,$link);


        // fin query a db


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
}
header("Location: tec-informatica-descargas.php");
?>
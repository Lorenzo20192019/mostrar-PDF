<?php
/**
 * Created by PhpStorm.
 * User: ruldin
 * Date: 16/08/2019
 * Time: 4:50 PM
 */

session_start();
include ('conexiondb.php');

if (!isset($_SESSION['USUARIO_LOGUEADO'])){

    echo'<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.html";   </script>';
}
$archivos=$_FILES;
$curriculum=$archivos['userfile']['name'];
$guardado=$archivos['userfile']['tmp_name'];
$CORREO=strtoupper($_POST ['LOGIN']);
$NOMBRECOMPLETO =strtoupper($_POST ['NOMBRECOMPLETO']);
$MOTIVO = $_POST ['MOTIVO'];
$RUTA='C:\xampp\htdocs\2019\ejemplosqli2\PDF/'.$curriculum;
$extension=substr($curriculum,strlen($curriculum)-4);
if (strcmp($extension,'.pdf')!==1){
    if (!file_exists('C:\xampp\htdocs\2019\ejemplosqli2\PDF')){
        mkdir('C:\PDF', 0777,true);
        if (file_exists('C:\xampp\htdocs\2019\ejemplosqli2\PDF')){
            move_uploaded_file($guardado['userfile']['tmp_name'],$RUTA.$curriculum);
        }
    }else{
        move_uploaded_file($guardado,$RUTA);
    }
}
$query = "Insert into tb_solicitud (nombreingresa,correoingresa,rutapdf,nombrearchivo,motivo) values
 ('".$NOMBRECOMPLETO."','".$CORREO."','".$RUTA."','".$curriculum."','".$MOTIVO."')"
or die("Error in the consult.." . mysqli_error(conectar()));
$resultado =mysqli_query(conectar(),$query);
echo "Información grabada con exito!!";
//echo '<script type="text/javascript"> window.location.href="index.html"; </script>';
?>




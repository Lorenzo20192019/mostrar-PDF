<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tb_solicitud where ID_SOLICITUD=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['ID_SOLICITUD']==""){
					?>
                    <p>NO tiene archivos</p>
                <?php 
				}else{ 
				header('content-type: application/pdf');
				readfile ('C:\xampp\htdocs\2019\ejemplosqli2\PDF'.$datos['curriculum']);
               }
            }
			?>
    </body>
</html>

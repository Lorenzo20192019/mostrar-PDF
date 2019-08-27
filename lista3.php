<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
   
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Listado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
//	include("include/cabeceralist.php");
	?>
</div>
</header>

    <!-- Navbar
    ================================================== -->

<hr class="soften"/>

	<h3>         </h3>		
<div class="row">
	<div class="span12">
	<div class="well well-small">
  
        <table  border='0'; class='table table-hover';>
            <tr>

                <td>Titulo</td>
                <td>Descripción</td>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tb_solicitud";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
			<td><a target="_blank" href="PDF?id=<?php echo $datos['ID_SOLICITUD']?>"><?php echo $datos['NOMBREARCHIVO']; ?></a></td>
            <td><?php echo $datos['MOTIVO']; ?></td>
            </tr>
                
          <?php  } ?>
            
        </table>
		     </div>
	</div>
</div>


<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>pie  de la pagina <br/><br/></p>
 </footer>
</div><!-- /container -->	
	
    </body>
</html>

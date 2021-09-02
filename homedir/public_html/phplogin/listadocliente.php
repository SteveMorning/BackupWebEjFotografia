<?php
session_start();
?>

<?php

/*
Host
*/
$host_db = "localhost";
$user_db = "estebanj";
$pass_db = "F0t0graf14s3j";
$db_name = "estebanj_base_datos";
$tbl_name = "clientes";


/*
LOCAL
$host_db = "localhost";
$user_db = "steve";
$pass_db = "esteban";
$db_name = "base_datos";
$tbl_name = "clientes";
*/
$conexion = mysql_connect($host_db, $user_db, $pass_db);

if ($conexion) {
 echo "Listado de Clientes";
}
mysql_select_db($db_name, $conexion);

$username = $_POST['username'];
$password = $_POST['password'];
 echo  "<p>" .$username. ' <br> ' .$password. "</p>" ;

 $sql = "SELECT * FROM $tbl_name ";
$sql = "SELECT * FROM $tbl_name WHERE nombre = '$username'";
$sql = "SELECT  `cliente` ,  `nombre` , `clave` , `pagina` FROM `clientes`";



$result = mysql_query($sql); 
$row = mysql_fetch_array($result);

if($result)	/*Verifica si la consulta tiene resultados*/	
{

echo "<table border = '1'> \n"; 
echo "<tr><td>Cliente</td><td>Nombre</td><td>Clave</td><td>Pagina</td></tr> \n"; 

while ($row = mysql_fetch_row($result)){ 
     echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr> \n"; 

	   }

echo "</table> \n"; 

/*
$cliente = $row["cliente"];
$name = $row["nombre"];
$clave = $row["clave"];
$pagina = $row["pagina"];

echo "<p> 
 Cliente: " .$cliente. " <br>
 Cliente: " .$name. " <br>
 Clave de acceso: ".$clave." <br>
 Pagina: ".$pagina." <br>
  </p>";
*/ 


}

 if ($password == $clave) { 
 echo  '-';
 $url= $pagina ;
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=https://www.estebanjuarezfotografia.com>Esteban Juarez Fotografia</a>"; 

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysql_close($conexion); 
 ?>
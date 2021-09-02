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
 echo "Conectado. Gracias por confiar en el servicio de ESTEBANJUAREZFOTOGRAFIA";
}
mysql_select_db($db_name, $conexion);

$username = $_POST['username'];
$password = $username;
 echo  "<p>" .$username. ' <br> ' .$password. "</p>" ;

 $sql = "SELECT * FROM $tbl_name ";
$sql = "SELECT * FROM $tbl_name WHERE nombre = '$username'";



$result = mysql_query($sql); 
$row = mysql_fetch_array($result);

if($result)	/*Verifica si la consulta tiene resultados*/	

$name = $row["nombre"];
$clave = $row["clave"];
$pagina = $row["pagina"];
echo "<p> 
 Cliente: " .$name. " <br>
 Clave de acceso: ".$clave." <br>
 Pagina: ".$pagina." <br>
 </p>";
{
/*
while($row = mysql_fetch_array($result))
{
$name = $row["nombre"];
$clave = $row["clave"];
echo "<p> 
 Cliente: " .$name. " <br>
 Clave de acceso: ".$clave." <br>
 </p>";
}*/
}
/*if (password_verify($password, $row['clave'])) { */
 if ($password == $clave) { 
 echo  'Accediendo a Fotos';
 $url= $pagina ;
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    

 } else { 
   echo "Clave incorrecta vuelva a intentarlo o contactese mediante Contacto.";

   echo "<br><a href='index.html'>Volver a Intentarlo</a>";
 }
 mysql_close($conexion); 
 ?>
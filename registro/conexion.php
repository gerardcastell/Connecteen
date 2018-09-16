<?php
$usuario=$_POST["user"];
$password=$_POST["inputPassword"];
$password2=$_POST["inputPassword2"];
$age=$_POST["age"];
$email=$_POST["inputEmail"];

//if($age < 16){
// die('No tienes la edad suficiente.');
//}
//if($password != $password2){
//    die('Las contraseñas no coinciden.');
//}

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', '123')or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('red_social') or die('No se pudo seleccionar la base de datos');
$sql = "INSERT INTO red_social (user, pass, mail) VALUES ('$usuario','$password','$email')";
$result = mysql_query($sql,$link);

mysql_close($link);

?>
<script>
    alert('Ha sido registrado con éxito. Ahora será redireccionado.');
    window.location="../Index.php"
</script>
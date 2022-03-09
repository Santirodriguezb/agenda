<?php
include_once('control_acceso.php');
include_once('db.php');
include_once('vista.php');

comprobarSesionUsuario();

$db = conectar();
if($db==false){
    echo "Hubo problemas conectando";
}


pintarCabeceira();
$contactos = listarContactos($db);
mostrarContactos($contactos);
echo "<a href='agregar_contacto.php'>Agregar contacto</a>";
pintarPe();

<<<<<<< HEAD

=======
echo "<p><a href='agregar_contacto.php'>Agregar contacto</a></p>";
echo "<p><a href='logout.php'>Salir</a></p>";
>>>>>>> 41f5c4c247e6ce0dae63b66078c29f5c29de0cce

if(!desconectar($db)){
    echo "Hubo problemas desconectando";
}
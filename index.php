<?php

include_once('db.php');
include_once('vista.php');

$db = conectar();
if($db==false){
    echo "Hubo problemas conectando";
}

cabeceira();
$contactos = listarContactos($db);
mostrarContactos($contactos);
pe();

if(!desconectar($db)){
    echo "Hubo problemas desconectando";
}
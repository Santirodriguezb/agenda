<?php
function cabeceira(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
<body>
    <h1>AGENDA DE CONTACTOS 2022</h1>
<?php    
}



function mostrarContactos($contactos){
    $cabeceraTabla = false;
    for ($i=0; $i<count($contactos); $i++) {
        if(!$cabeceraTabla){
            $cabeceraTabla = array_keys($contactos[$i]);
            echo "<table border='1'><tr>";
            foreach ($cabeceraTabla as $nombreColumna) {
                echo "<th> $nombreColumna </th>";
            }
            echo "</tr>";
            
        }
        echo "<tr>";
        foreach ($contactos[$i] as $nombreCampo => $valorCampo) {
            echo "<td> $valorCampo </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
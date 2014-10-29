<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */

$Alumnos=array(
    array(
        "codigo",
        "nombre",
        "edad",
        "opciones"),
    array(
        "codigo"=>"850",
        "nombre"=>"juan lopez",
        "edad"=>"100",
        "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
    ),
    array(
       "codigo"=>"457",
       "nombre"=>"josue herrera",
       "edad"=>"25",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
         
    ),
    array(
       "codigo"=>"477",
       "nombre"=>"maria lopez",
       "edad"=>"22",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
    ),
    array(
       "codigo"=>"234",
       "nombre"=>"jesus hernandez",
       "edad"=>"30",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>'  
    ),
    array(
       "codigo"=>"123",
       "nombre"=>"jose gutierrez",
       "edad"=>"21",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>'   
    ),
    array(
       "codigo"=>"111",
       "nombre"=>"fatima perez",
       "edad"=>"23",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
    )
);
echo "<table>";
foreach($Alumnos as $indice=>$persona){
    echo"<tr>";
    foreach($persona as $campo=>$valor){
        echo "<td>". $valor."</td>";
    }
    echo "</tr>"; 
}
echo "</table>";
?>
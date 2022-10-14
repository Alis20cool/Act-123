<?php
    /*
    *  Descripcion: Componente los datos del registro
    *  Autor: Alison Adriana Vazquez Ruiz
    *  Fecha:14/octubre/2022
    */

    //Obtiene nombre y apellido del formulario
    $name=$_GET['nombre'];
    $surnames=$_GET['apellidos'];

    echo "Hola $name $surnames";
    echo "<H2>";
    echo "¡BIENVENIDO!";
    echo "</H2>";
    echo "<br>";
    echo "<a href='../html/registro.html'> REGRESAR </a>";
?>
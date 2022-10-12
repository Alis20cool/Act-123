<?php
    /*
    *  Descripcion: Componente los datos de formulario
    *  Autor: Alison Adriana Vazquez Ruiz
    *  Fecha:12/octubre/2022
    */

    //Obtiene nombre de formulario
    $name=$_GET['nombre'];
    echo "Hola $name";
    echo "<br>";
    $age=$_GET['edad'];
    echo "¡Tienes $age años!";
    echo "<br>";
    $number=$_GET['numero'];
    echo "Tu numero es $number";
    echo "<br>";
    echo "<a href='../html/greetingForm.html'> Regresar </a>";
?>
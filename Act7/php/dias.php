<?php
    /*
    *  Descripcion: Aqui se calculan los dias vividos mediante edad
    *  Autor: Alison Adriana Vazquez Ruiz
    *  Fecha:21/octubre/2022
    */

    //Obtiene la edad 
    $age=$_GET['edad'];

    $dias= $age*365;
    echo "<center>";
    echo "<H2>";
    echo "LOS DIAS VIVIDOS SON $dias";
    echo "</H2>";
    echo "<br>";
    echo "<a href='../html/dias.html'> REGRESAR </a>";
    echo "</center>";
?>
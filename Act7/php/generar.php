<?php
    /*
    *  Descripcion: Realiza la tabla 
    *  Autor: Alison Adriana Vazquez Ruiz
    *  Fecha:21/octubre/2022
    */

    // Se crea tabla con if y for
    $fila=$_GET['fila'];
    $columna=$_GET['columna'];

    if(isset(($_GET['fila'])) && isset(($_GET['columna']))){
        echo "<table border='1' align='center'>";
        for ($fila=1; $fila<= $_GET['fila']; $fila++){
            echo "<tr>";
            for ($columna=1; $columna<=$_GET['columna']; $columna++){
            echo "<td>"
            echo "$fila . $columna";
            echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if($GET) {
    $ren= $_GET['ren'];
    $col= $_GET['col'];
    if ($col&&$ren&&isset($_GET['ren'])) {
        echo "<center>"
        echo "<table align='center' border='1px'>";

        for($col=1; $col <=$_GET['columna']; $col++) {
            echo"<tr>";
            for($ren=1; $ren <= $_GET['renglon']; $ren++) {
                echo "<td>"
            echo "$col$ren";
            echo "</td>";
            }
            echo "<tr>";
        }
    }
    echo "</table>";
    echo "</center>";
}

    echo "<br>";
    echo "<a href='../html/GenerarTabla.html'> REGRESAR </a>";
    echo "</center>";
?>
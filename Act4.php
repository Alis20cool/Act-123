<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Actividad 4 </title>
</head>
<body>
    <h1 id="pancrasio"> Soy una simple página!!! =( =( =(</h1>
    <button id="btnrosa" style="background-color: pink;" onmouseover="rosa()"> Pink </button>
    <button id="btnceleste" style="background-color: cyan;" onmouseover="celeste()"> Cyan </button>
    <button id="btnamarillo" style="background-color: yellow;" onmouseover="amarillo()"> Yellow </button>

    <script>
        function rosa(){
            //alert("Outchh Soy rosa");
            document.getElementById("pancrasio").style.backgroundColor="pink";
        }
        function celeste(){
            //alert("Outchh Soy celeste");
            document.getElementById("pancrasio").style.backgroundColor="cyan";
        }
        function amarillo(){
            //alert("Outchh Soy amarillo");
            document.getElementById("pancrasio").style.backgroundColor="yellow";
        }
    </script>
</body>
</html>
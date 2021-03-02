<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyendo línea a línea</title>
</head>

<body>
    <?php
    //Se trata de abrir el archivo, si no se puede...
    //mostramos un mensaje: no se puede abrir el archivo
    $miArchivo = fopen("miDiccionario.txt","r")
        or die("No se puede abrir el archivo");
    
    //Emplear un ciclo while para recorrer el archivo linea por linea
    //hasta llegar al final del archivo
    //obtener cada linea y mostrarla
    while (!feof($miArchivo)){
        echo fgets($miArchivo) . "<br>";
    }

    //se cierra el archivo
    fclose($miArchivo);
    ?>
</body>

</html>
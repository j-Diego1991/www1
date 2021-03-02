<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        $nombreArchivo = "Lorem.txt";
        $archivo = fopen ( $nombreArchivo, "r");    //ABRE EL ARCHIVO

        if($archivo == false){
            echo ("Error al abrir el archivo");     //SI HAY ERROR NOS MUESTRA UN MENSAJE     
            exit();
        }

        $size = filesize ($nombreArchivo);          //OBTIENE EL TAMAÑO DEL ARCHIVO
        $elTexto_archivo = fread ($archivo, $size); //LEE EL CONTENIDO
        fclose ($archivo);                          //CIERRA EL ARCHIVO

        echo("File size : $size bytes");
        echo("<pre>$elTexto_archivo</pre>");
    ?>
</body>  
</html>
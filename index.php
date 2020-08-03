<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = "Dario" ; // crea la variable nombre con valor dario
        $edad = 30 ; 
        print "El nombre del usiuario es: $nombre <br>";
        print "El nombre del usiuario es: " . $nombre;
        print ' <br> El nombre del usiuario es: $nombre <br><br>' ;

        print "El nombre del usiuario es: $nombre  $edad <br>";
        print "El nombre del usiuario es: " . $nombre . $edad . " <br>";
        print ' El nombre del usiuario es: $nombre $edad <br>';

        echo $nombre, $edad ; 
    ?>



</body>
</html>
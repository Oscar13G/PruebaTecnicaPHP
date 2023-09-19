<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Tecnica</title>
</head>
<body>
    <h1>
        <?php
        echo "Prueba tecnica con Docker" 
        ?>
    </h1>
    <h2>
        <?php
        //Crear conexion
        $conexion = mysqli_connect("db-mysql:3306","root","pswdummy1","prueba-tec");
        //Validar conexion 
        if(!$conexion){
            die("Error" . mysqli_connect_error());
        }
        echo "Conexion a DB Existosa";
        ?>
    </h2>
    <h3>
        <?php
        //Consulta
        if ($resultado = mysqli_query($conexion, "SELECT * FROM empleado LIMIT 10")) {
        printf("La Consulta devolvió %d filas.\n", mysqli_num_rows($resultado));
        //echo $resultado;
        /* liberar el conjunto de resultados */
        mysqli_free_result($resultado);
        }
        ?>
    </h3>
</body>
</html>
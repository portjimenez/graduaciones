<?php 

            //MANASÉS JIMÉNEZ TODO EL CODIGO PHP

include('conexion.php');

$ca = $_GET['carnet'];

if (isset($_GET['carnet'])){
$consulta = "SELECT * FROM alumnos WHERE codigo = '".$ca."'";
$resultado = mysqli_query($conn,$consulta);
if ($resultado) {
    while ($row = $resultado->fetch_array()) {
    $codigo = $row['codigo'];
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $grado = $row['grado'];
    $hora = $row['hora'];

    }
}}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduación</title>
    <link rel="stylesheet" href="./Datos y PDF/estilos.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/png" href="./Consulta/recurso/logo.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="principal">
        <form action="#" method="GET">
            <h1 class="instruccion"><i class="fas fa-key"></i>Información importante <br></h1>
            <label class="subtitle" for="textoo1">Nombres</label>
            <input id="textoo1" type="text" value="<?php echo $nombre ?>" placeholder="Nombres" disabled>

            <label class="subtitle" for="textoo2">Apellidos</label>
            <input id="textoo2" type="text" value="<?php echo $apellido ?>" placeholder="Apellidos" disabled>


            <label class="subtitle" for="textoo3">Grado</label>
            <input id="textoo3" type="text" value="<?php echo  $grado ?>" placeholder="Grado" disabled>

            <label class="subtitle" for="textoo4">Carnet</label>
            <input id="textoo4" type="text" value="<?php echo $codigo ?>" placeholder="Carnet" disabled>

            <label class="subtitle" for="textoo5">Hora Asignada</label>
            <input id="textoo5" type="text" value="<?php echo $hora ?>" placeholder="Hora Asignada" disabled>


        </form>

        <div class="images">
            <!-- <img src="./recurso/fdv-logo.png" alt="" class="logo"> -->
            
            <div class="piedepag">
                <b><p class="subt">Horarios</p></b>
                <br>
                <b><p class="subt">6to. Perito Administración, 6to Perito Mercadotecnia <br>
                    y Publicidad, 6to Perito Contador
                </p></b>
                <p class="p">8:00 a.m.</p>
                <br>
                <b><p class="subt">Medicina 
                </p></b>
                <p class="p">9:00 a.m.</p>
                <br>
                <b><p class="subt">Computación, Chef, 6to Secretariado y <br>
                    6to Magisterio 
                </p></b>
                <p class="p">10:30 a.m.</p>
                <br>
                <b><p class="subt">Ciencias de la Comunicación, Diseño Gráfico y<br>
                    Construcción
                </p></b>
                <p class="p">11:30 a.m.</p>
                <br>
                <b><p class="subt">Ciencias Jurídicas y 5to Bachilletaro "G" 
                </p></b>
                <p class="p">12:30 a.m.</p>
                <br>

            </div>

        </div>


    </main>
</body>

</html>
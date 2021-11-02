<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
<?php
            //MANASÉS JIMÉNEZ(TODA LA PAGINA)
include('conexion.php');
//include_once 'validar.php';

$carnet = $_POST['carnet'];


$query = mysqli_query($conn, "select * from alumnos where codigo = '".$carnet."'");
$nr = mysqli_num_rows ($query);

if ($nr == 1){
    ?>
    <script>
    location.href = "indexDATOS.php?carnet=<?php echo $carnet;?>"
    </script>
    <?php
} else if($nr == 0){
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/error.js"></script>
    <script>
    function redireccionar() {
        window.location = "http://localhost:50/graduandos/indexConsulta.php"
    }
    setTimeout("redireccionar()", 3000);
    </script>
<?php
    
}


?>
</body>
</html>
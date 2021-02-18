<!-- modulo de la conexion a la base de datos -->
<?php
$USERHOST = 'localhost';
$USERNAME = 'root';
$PASWORDNAME = '';
$TABLENAME = 'alquiler';
try {
    $connection = mysqli_connect($USERHOST,
    $USERNAME,
    $PASWORDNAME,
    $TABLENAME);
    if (isset($connection)) {
        true;
    }
} catch (\Throwable $th) {
   echo "ERROR "+$th;
}
?>
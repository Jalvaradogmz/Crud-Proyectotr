<?php
$con = mysqli_connect('localhost','root','','crudproyectotr');
if (isset($_POST['guardar'])) {
    $nom = $_POST['nombre'];
    $ape = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $cedu = $_POST['cedula'];
    $correo = $_POST['correo'];
    $tele = $_POST['telefono'];

    $query = "INSERT INTO estudiantes(nombre,apellidos,edad,cedula,correo,telefono) VALUES('$nom','$ape','$edad','$cedu','$correo','$tele')";
    $agregar = mysqli_query($con, $query);
    if (!$agregar) {
        header("Location: index.php");
    }   

    
    header("Location: index.php");
}

<?php 
    $con = mysqli_connect('localhost', 'root', '', 'crudproyectotr');
  
    if (isset($_GET['Cedula'])){
        $cedula = $_GET['Cedula'];
        $query = "DELETE FROM estudiantes WHERE Cedula = $cedula";
        $eliminar = mysqli_query($con,$query);
        
        if(!$eliminar){
            die("No se puedo hacer la accion");
        }
        
        header("Location: index.php");

    }
    
    
?>
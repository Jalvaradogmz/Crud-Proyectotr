<?php
    $con = mysqli_connect('localhost', 'root', '', 'crudproyectotr');
    if (isset($_GET['Cedula'])){
        $cedula = $_GET['Cedula'];
        $query = "SELECT * FROM estudiantes WHERE Cedula = $cedula";
        $editar = mysqli_query($con,$query);

        if(mysqli_num_rows($editar) == true){
            $fila = mysqli_fetch_array($editar);
            $ide = $fila['Cedula'];
            $nombre = $fila['Nombre'];
            $apellidos = $fila['Apellidos'];
            $edad =  $fila['Edad'];
            $correo = $fila['Correo'];
            $telefono = $fila['Telefono'];

        }

    }
    if (isset($_POST['actualizar'])){
        $cedula = $_GET['cedula']; 
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        
        $query = "UPDATE estudiantes set nombre = '$nombre', apellidos = '$apellidos',
        edad = '$edad', correo = '$correo', telefono = '$telefono' WHERE cedula = '$cedula'";
        mysqli_query($con,$query);
        header("Location: index.php");
    }

    if (isset($_POST['atras'])){
        header("Location: index.php");
    }
?>
<?php include("includes/header.php");?>
    
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card-body">
                    <form action="editar.php?cedula= <?php echo $_GET['Cedula'];?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo $nombre?>" class="form-control" placeholder="Editar Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="apellidos" value="<?php echo $apellidos?>" class="form-control" placeholder="Editar Apellidos">
                        </div>
                        <div class="form-group">
                            <input type="number" name="edad" value="<?php echo $edad?>" class="form-control" placeholder="Editar Edad">
                        </div>
                        <div class="form-group">
                            <input type="text" name="correo" value="<?php echo $correo?>" class="form-control" placeholder="Editar Correo">
                        </div>
                        <div class="form-group">
                            <input type="number" name="telefono" value="<?php echo $telefono?>" class="form-control" placeholder="Editar Teléfono">
                        </div>
                        <button class="btn btn-success" name="actualizar">
                            Actualizar
                        </button>
                        <button class="btn btn-success" name="atras">
                            Atrás
                        </button>
                    </form>    
                </div>
            </div>
        </div>        
    
    </div>
    
<?php include("includes/footer.php");?>


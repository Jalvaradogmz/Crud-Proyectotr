<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name="edad" class="form-control" min="0" placeholder="Edad" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name="cedula" class="form-control" min="0" placeholder="Cédula" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="correo" class="form-control" placeholder="Correo" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name="telefono" class="form-control" min="0" placeholder="Teléfono" autofocus>
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="guardar" value="Agregar Estudiante" autofocus>
                </form>
            </div>

        </div>

        <div class="cold-md-8">
            <table class="table table-sm table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Cédula</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Creación</th>
                        <th>Opción</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    session_start();
                    $con = mysqli_connect('localhost', 'root','', 'crudproyectotr');
                    $query = "SELECT * FROM estudiantes";
                    $resultados = mysqli_query($con, $query);

                    while ($fila = mysqli_fetch_array($resultados)) { ?>
                        <tr>
                            <td><?php echo $fila['Nombre'] ?></td>
                            <td><?php echo $fila['Apellidos'] ?></td>
                            <td><?php echo $fila['Edad'] ?></td>
                            <td><?php echo $fila['Cedula'] ?></td>
                            <td><?php echo $fila['Correo'] ?></td>
                            <td><?php echo $fila['Telefono'] ?></td>
                            <td><?php echo $fila['Fecha_creacion'] ?></td>

                            <td>
                                <a href="eliminar.php?Cedula=<?php echo $fila['Cedula'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"> </i>
                                </a>
                                <a href="editar.php?Cedula=<?php echo $fila['Cedula'] ?>" class="btn btn-success">
                                    <i class="fas fa-marker"> </i>
                                </a>
                            </td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>


        </div>

    </div>
</div>
<?php include("includes/footer.php"); ?>
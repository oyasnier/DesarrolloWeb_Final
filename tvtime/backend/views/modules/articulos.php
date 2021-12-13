<?php

session_start();

// validamos que la variable de session no es verdadero
if (!isset($_SESSION["validar"])) {
    header("location:login");
    exit();
}

include "views/includes/header.php";
include "views/includes/navbar.php";
include "views/includes/sidebar.php";
include "views/includes/content-wrapper.php";
?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">

                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 mb-4 d-md-flex d-lg-flex justify-content-md-center justify-content-lg-start">
                            <h3 class="card-title">Lista de todos los articulos posteados</h3>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= RUTA_BACKEND ?>crearArticulo" class="btn btn-dark   btn-xl pull-right w-100">
                                <i class="fa fa-plus"></i> Nuevo Articulo
                            </a>
                        </div>
                    </div>
                </div>

                <table id="listarUsuarios" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //instanciamos la clase del controlador
                        $listarArticulos = new ArticulosControllers();
                        //la volcamos en una variable
                        $resultados = $listarArticulos->leerArticulos();

                        //var_dump($resultados);
                        //recorremos los datos
                        foreach ($resultados as $articulos) :

                        ?>

                        <tr>
                            <td><?php echo $articulos->id; ?></td>
                            <td><?php  echo $articulos->titulo; ?></td>
                            <td><img src="<?php echo RUTA_FRONTEND.$articulos->imagen; ?>" alt="" width="150" height="auto"></td>
                            <td><?php  echo $articulos->contenido; ?></td>
                                                      
                            <td>
                                <a name="" id="" class="btn btn-dark" href= "<?php echo RUTA_BACKEND; ?>editarArticulo/<?php echo $articulos->id; ?>" role="button">Editar</a> 
                                <!-- <a class="btn btn-danger" href="<?php  ?>borrarArticulo/<?php  ?>" role="button">Eliminar</a> -->
                            </td>
                        </tr>
                        <?php endforeach; 
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->






<?php include "views/includes/footer.php"; ?>
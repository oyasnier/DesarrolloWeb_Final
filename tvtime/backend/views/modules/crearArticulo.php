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

<div class="content">
    <div class="row">
        <div class="col-12">
            <?php
            //creamos el controlador para crear articulos

            $crearArticulo = new ArticulosControllers();
            $crearArticulo->crearArticulosControllers();

            ?>
        </div>
    </div>
</div>


<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
            
                <div class="col-12">

                    <div class="row">
                        <div class="col-8">
                            <div class="card card-outline card-info">
                                <div class="form-group px-2">
                                    <label for="tituloArticulo">Titulo de la publicación:</label>
                                    <input type="text" class="form-control" name="tituloArticulo" placeholder="Ingrese el titulo" required>
                                </div>
                                <div class="form-group px-2">
                                    <label for="contenidoArticulo">Contenido de la publicación:</label> <br>
                                    <textarea id="editor" name="contenidoArticulo" cols="90" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card card-outline card-info">

                                <div class="form-group px-2">
                                    <label for="fechaArticulo">Fecha de publicación:</label>
                                    <input type="text" class="form-control" name="fechaArticulo" value="<?php echo $fechaActual = date('Y-m-d'); ?>" id="datepicker">
                                </div>

                                <div class="form-group px-2">
                                    <label for="canalArticulo">Canal de Reproduccion:</label> <br>

                                    <select class="form-control" name="canalArticulo">
                                        <option value="1">NETFLIX</option>
                                        <option value="2">HBO MAX</option>
                                        <option value="3">DISNEY PLUS</option>
                                        <option value="4">CLARO VIDEO</option>
                                    </select>
                                </div>

                                <div class="form-group px-2">
                                    <label for="categoriaArticulo">Categoria:</label> <br>

                                    <select class="form-control" name="categoriaArticulo">
                                        <option value="1">PELICULAS</option>
                                        <option value="2">SERIES</option>
                                        
                                        
                                    </select>
                                </div>

                                <div class="form-group px-2">
                                    <label for="imagenArticulo">Imagen:</label> <br>
                                    <input type="file" class="form-control-file" name="imagenArticulo" id="imagenArticulo" placeholder="Seleccione una imagen">
                                </div>

                                <div class="form-group px-2">
                                    <button type="submit" name="crearArticulo" class="btn btn-dark w-100"><i class="fas fa-upload px-2"></i>Subir Articulo</button>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!-- /.row -->
        </form><!-- termina el formulario -->
    </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include "views/includes/footer.php"; ?>
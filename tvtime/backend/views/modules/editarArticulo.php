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
      //creamos el controlador para editar articulos
      $editarArticulo = new ArticulosControllers();
      $respuesta = $editarArticulo->editarArticulosControllers();
      $actualizarArticulo = new ArticulosControllers();
      $actualizarArticulo->actualizarArticulosControllers();

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
                            <input type="hidden" name="idArticulo" 
                            value="<?php echo isset($respuesta->idArticulo) ? $respuesta->idArticulo : ""; ?>">
                                <div class="form-group px-2">
                                    <label for="tituloArticulo">Titulo de la publicación:</label>
                                    <input type="text" class="form-control" name="tituloArticulo" 
                                    value="<?php echo isset($respuesta->titulo) ? $respuesta->titulo : ""; ?>" required>
                                </div>
                                <div class="form-group px-2">
                                    <label for="contenidoArticulo">Contenido de la publicación:</label> <br>
                                    <textarea id="editor" name="contenidoArticulo" cols="90" rows="10">
                                    <?php echo isset($respuesta->contenido) ? $respuesta->contenido : ""; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card card-outline card-info">

                                <div class="form-group px-2">
                                    <label for="fechaArticulo">Fecha de publicación:</label>
                                    <input type="text" class="form-control" name="fechaArticulo" value="<?php echo isset($respuesta->publicacion) ? $respuesta->publicacion : ""; ?>">
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
                                    <img src="<?php echo RUTA_FRONTEND.$respuesta->imagen;?>" width="auto" height="200">
                                    <label for="imagenArticulo">Imagen:</label> <br>
                                    <input type="file" class="form-control-file" name="imagenArticulo" id="imagenArticulo" placeholder="Seleccione una imagen">
                                </div>

                                <div class="form-group px-2">
                                    <button type="submit" name="actualizarArticulo" class="btn btn-dark w-100"><i class="fas fa-upload px-2"></i>Actualizar Articulo</button>
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
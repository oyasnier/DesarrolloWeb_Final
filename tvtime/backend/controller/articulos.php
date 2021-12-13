<?php

class ArticulosControllers
{

    /**
     * METODO PARA LISTAR TODOS LOS ARTICULOS
     */
    public function leerArticulos()
    {
        $respuesta = ArticulosModels::leerArticulosModels("articulos");

        return $respuesta;
    }

public function crearArticulosControllers()
    {
        if (isset($_POST['crearArticulo'])) {
            //validamos que la imagen no este vacia
            if ($_FILES['imagenArticulo']['error'] > 0) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Errror</strong> No agrego la imagen 
                    </div>';
            } else {
                //guardamos todo lo que venga de el POST y lo asignamos a un arreglo
                $datosController = array(
                    "canal" => trim($_POST["canalArticulo"]),
                    "categoria" => trim($_POST["categoriaArticulo"]),
                    "titulo" => trim($_POST["tituloArticulo"]),
                    "contenido" => trim($_POST["contenidoArticulo"]),
                    "publicacion" => trim($_POST["fechaArticulo"])
                );
                
                //validamos que no vengan vacios
                if ($datosController["titulo"] == "" || $datosController["contenido"] == "") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error</strong> Campo titulo o contenido estan vacios 
                    </div>';
                } else {

                    //guardamos la imagen
                    $imagen = $_FILES["imagenArticulo"]["name"];

                    $imagenArray = explode(".", $imagen);
                    $aleatorio = rand(1000, 9999);
                    $nuevoNombreImagen = $imagenArray[0] . $aleatorio . '.' . $imagenArray[1];
                    $rutaAGuardar = "../views/img/" . $nuevoNombreImagen;

                    //movemmos los archivos temporales a nuestra ruta de imagenes
                    move_uploaded_file($_FILES["imagenArticulo"]["tmp_name"], $rutaAGuardar);


                    $datosController['imagen'] = $rutaAGuardar;

                    $guardarArticulo = ArticulosModels::crearArticulosModels($datosController, "articulos");

                    if ($guardarArticulo[0] == "exitoso") {

                        //Tuve que dejarlo como comentario por que me estaba dando error
                        //header("location:articulos/$guardarArticulo[0]/$guardarArticulo[1]");
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Errror</strong> No se pudo guardar el registro
          </div>';
                    }
                }
            }
        }
    }

/**
     * METODO PARA EDITAR ARTICULOS
     */

    public function editarArticulosControllers()
    {
        $idArticulo = explode("/", $_SERVER["REQUEST_URI"]);

        //var_dump($idArticulo);

        if (isset($idArticulo[3]) && is_numeric($idArticulo[3])) {

            $id = $idArticulo[3];           
            $respuesta = ArticulosModels::editarArticulosModels($idArticulo, "articulos");

            if ($respuesta == true) {
                return $respuesta;
            } else {
                header("location:" . RUTA_BACKEND . "articulos/noencontrado");
            }
        } elseif (isset($idArticulo[3]) == "") {
            header("location:" . RUTA_BACKEND . "articulos/vacio");
        } else {
            header("location:" . RUTA_BACKEND . "articulos");
        }
    }
        
    
/**
     * METODO PARA ACTUALIZAR ARTICULOS
     */

    public function actualizarArticulosControllers()
    {
        if (isset($_POST['actualizarArticulo']) && $_POST['tituloArticulo'] != "") {

            //guardamos todo lo que venga de el POST y lo asignamos a un arreglo
            $datosController = array(
                "id" => $_POST["idArticulo"],
                "idcategoria" => trim($_POST["categoriaArticulo"]),
                "titulo" => trim($_POST["tituloArticulo"]),
                "contenido" => trim($_POST["contenidoArticulo"]),
                "publicacion" => trim($_POST["fechaArticulo"])
            );

            //validamos que la imagen no este vacia
            if ($_FILES['imagenArticulo']['error'] > 0) {

                //validamos que no vengan vacios
                if ($datosController["titulo"] == "" || $datosController["contenido"] == "") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Errror</strong> Campo titulo o contenido estan vacios 
                    </div>';
                } else {

                    //Pasamos la imagen vacia

                    $datosController['imagen'] = "";

                    $respuesta = ArticulosModels::actualizarArticulosModels($datosController, "articulo");

                    if ($respuesta[0] == "exitoso") {
                        header("location:" . RUTA_BACKEND . "editarArticulo/$respuesta[1]/ok");
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                                  </button>
                        <strong>Errror</strong> No se pudo guardar el registro
                          </div>';
                    }
                }
            } else {
                //validamos que no vengan vacios
                if ($datosController["titulo"] == "" || $datosController["contenido"] == "") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Errror</strong> Campo titulo o contenido estan vacios 
                    </div>';
                } else {

                    //guardamos la imagen
                    $imagen = $_FILES["imagenArticulo"]["name"];

                    $imagenArray = explode(".", $imagen);

                    $aleatorio = rand(1000, 9999);
                    $nuevoNombreImagen = $imagenArray[0] . $aleatorio . '.' . $imagenArray[1];
                    $rutaAGuardar = "../views/assets/galeria/" . $nuevoNombreImagen;

                    //movemmos los archivos temporales a nuestra ruta de imagenes
                    move_uploaded_file($_FILES["imagenArticulo"]["tmp_name"], $rutaAGuardar);


                    $datosController['imagen'] = $rutaAGuardar;

                    $respuesta = ArticulosModels::actualizarArticulosModels($datosController, "articulo");

                    if ($respuesta[0] == "exitoso") {
                        header("location:" . RUTA_BACKEND . "editarArticulo/$respuesta[1]/ok");
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Errror</strong> No se pudo guardar el registro
          </div>';
                    }
                }
            }
        }
    }
    

}
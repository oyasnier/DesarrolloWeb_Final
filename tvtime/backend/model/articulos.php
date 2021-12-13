<?php

include_once "model/conexion.php";

class ArticulosModels
{
    public static function leerArticulosModels($tabla)
    {
        //Instanciamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("SELECT id_articulo AS id, fk_canal AS idcanal, fk_categoria AS idcategoria, 
        titulo_articulo AS titulo, contenido_articulo AS contenido, imagen_articulo AS imagen, 
        fecha_publicacion AS publicacion FROM $tabla");

        //ejecutamos la consulta

        $stmt->execute();

        $articulos = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $articulos;

        $stmt = null;
    }

    public static function crearArticulosModels($datosModels, $tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("INSERT INTO $tabla (fk_canal, fk_categoria, titulo_articulo, contenido_articulo, imagen_articulo, 
        fecha_publicacion) VALUES (:idcanal, :idcategoria, :titulo, :contenido, :imagen, :fecha)");

        //preparamos los valores
        $stmt->bindParam(":idcanal", $datosModels["canal"], PDO::PARAM_INT);
        $stmt->bindParam(":idcategoria", $datosModels["categoria"], PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $datosModels["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":contenido", $datosModels["contenido"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datosModels["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datosModels["publicacion"], PDO::PARAM_STR);
        //ejecutamos la consulta


        if ($stmt->execute()) {
            # code...
            $resp = ["exitoso", $db->lastInsertId()];
            return $resp;
        } else {
            return "Error";
        }

        $stmt = null;
    }

    public static function editarArticulosModels($idArticulo, $tabla)
    {
        //Instanciamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("SELECT a.id_articulo AS idArticulo, a.fk_canal AS idCanal, a.fk_categoria AS idCategoria, 
        a.titulo_articulo AS titulo, a.contenido_articulo AS contenido, a.imagen_articulo AS imagen, 
        a.fecha_publicacion AS publicacion, c.nombre_canal AS canal, d.nombre_categoria AS categoria FROM $tabla AS a
        INNER JOIN canal AS c ON a.fk_canal = c.id_canal INNER JOIN categoria AS d ON a.fk_categoria = d.id_categoria
        WHERE a.id_articulo = :id");

        //preparamos los valores

        $stmt->bindParam(":id", $idArticulo, PDO::PARAM_INT);
        //ejecutamos la consulta


        if ($stmt->execute()) 
        {
            $articulos = $stmt->fetch(PDO::FETCH_OBJ);
            return $articulos;
        }
        else
        {
            return "Id No Encontrado";
        }
        $stmt = null;
    }
    

    public static function actualizarArticulosModels($datosModels, $tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("INSERT INTO $tabla (fk_canal, fk_categoria, titulo_articulo, contenido_articulo, imagen_articulo, 
        fecha_publicacion) VALUES (:idcanal, :idcategoria, :titulo, :contenido, :imagen, :fecha)");

        //preparamos los valores
        $stmt->bindParam(":idcanal", $datosModels["canal"], PDO::PARAM_INT);
        $stmt->bindParam(":idcategoria", $datosModels["categoria"], PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $datosModels["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":contenido", $datosModels["contenido"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datosModels["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datosModels["publicacion"], PDO::PARAM_STR);
        //ejecutamos la consulta


        if ($stmt->execute()) {
            # code...
            $resp = ["exitoso", $db->lastInsertId()];
            return $resp;
        } else {
            return "Error";
        }

        $stmt = null;
    }

}


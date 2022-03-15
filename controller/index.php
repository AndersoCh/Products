<?php
#here we're calling index form model folder
require_once("model/index.php");

class modeloControler{
    private $model;
    function __construct(){
        $this->model = new Modelo();
    }

    //showing 
    static function index(){
        #conection
        $producto = new Modelo();
        $dato     =  $producto->mostrar("productos","1");
        require_once("view/index.php");
    }
    //New, we are calling view nuevo.php from view folder 
    static function nuevo(){
        require_once("view/nuevo.php");
    }
    //SAVE
    static function guardar(){
        $nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "'".$nombre."','".$precio."'";
    	$producto 	=	new Modelo();
		$dato 		=	$producto->insertar("productos",$data);
        #after insert product we go to principal page
        header("location:".urlsite);

    }

    //Update method
    static function editar(){
        #We consult to Database
        $id=$_REQUEST['id'];
    	$producto 	=	new Modelo();
    	$dato=$producto->mostrar("productos","id=".$id);    	
    	require_once("view/editar.php");

    }
    
    static function actualizar(){
        $id 		= 	$_REQUEST['id'];
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "nombre='".$nombre."', precio=".$precio;
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos",$data,$condicion);
         #we return to principal page
        header("location:".urlsite);     
    }

    //Delete
    static function eliminar(){
        $id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("productos",$condicion);
		header("location:".urlsite);
    }

}


?>
<?php

class visitas{

	private $id;
	private $descripcion;

	//Constructor

	function __construct() {  
    
    }

    function __clone() {  
     $this->id = ++$this->id;   
    }   


	//Metodos SET & GET

    public function get_Id(){
    	return $this->id;
    }

    public function set_Id($id){
    	$this->id = $id;
    }

    public function get_Descripcion(){
    	return $this->descripcion;
    }

    public function set_Descripcion($descripcion){
    	$this->descripcion = $descripcion;
    }


}

?>
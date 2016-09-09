<?php


	require_once("colector.php");

	class visitasCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarVisitas(){

			try{

				$result = $this->modelo->Listar("visitas");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertVisitas($nombre_visitas){

			try{

				$result = $this->modelo->operacion("INSERT INTO visitas(descripcion) values('".$nombre_visitas."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateVisitas($id ,$nombre_visitas){

			try{

				$result= $this->modelo->operacion("UPDATE visitas SET descripcion = '".$nombre_visitas."' WHERE id ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeleteVisitas($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from visitas WHERE id = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		// PROCESO DE LOGIN

		public function Captura_USR_PASS($id,$pass){

			try{

				$result = $this->modelo->operacion("SELECT nombre_Visitas, pass FROM visitas where nombre_Visitas='".$id."' AND pass='".$pass."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END CAPTURA

		

	}//END CLASS

?>
<?php

	require_once ("conexion.php");



//*********


	class colector{

		private $con;

		public function __construct(){

			$this->con = new conexion(); //Abre la conexion con la BD

		}

		public function Listar($table){

			try{

				$result = array();
				$cadena = "SELECT * FROM ".$table;

				echo $cadena; //verificamos la cadena

				$stm = $this->con->prepare($cadena);
				$stm->execute();

				$result = $stm->fetchAll(PDO::FETCH_CLASS, $table);

				$this->con->close_con();

				return $result;

			}catch(Exception $e){
				die($e->getMessage());
			}
		
		}//END FUNCTION


		public function operacion($cadena){

			try{

				
				$stm =  $this->con->prepare($cadena);
        		$stm->execute();
        		$count = $stm->rowCount();
        		//$count = $this->con->exec($cadena);
		
         		$this->con->close_con();
        		return $count;
        

			}catch(Exception $e){
				die($e->getMessage());
			}

		}//END FUNCTION




	}



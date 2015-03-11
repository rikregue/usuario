<?php
	class AdministradorController extends AppController{
		var $uses = array('Publicacion', 'Autor', 'Receta');
		var $layout = 'administrador';
		 function index(){
		// 	$arrAdministradores = $this->Administrador->find('all');
		// 	//pr($arrPublicaciones);
		// 	$this->set('administradores', $arrAdministradores);
		}
		function post(){
			
		}

		function save_post(){
			//pr($this->data);
			$this->Publicacion->create();
			if( $this->Publicacion->save($this->data)){
				echo json_encode(array('success' => true));
			}else{
				echo json_encode(array('success' => false));
			}
			exit;
			
		}

		function list_post(){
			$arrPublicaciones = $this ->Publicacion->find('all');
			//pr($arrPublicaciones);
			$this->set('publicaciones', $arrPublicaciones);
		}
		//function autores(){	
			////$arrAutores = $this ->Autor->find('all');
			//pr($arrAutores);
			//$this->set('autores', $arrAutores);


	//}
		//function save_autor(){
			////pr($this->data);
			//$this->Autor->create();
			//if( $this->Autor->save($this->data)){
				//echo json_encode(array('success' => true));
			//}else{
				//echo json_encode(array('success' => false));
			//}
			//exit;
			
		//}

		function recetas(){	
			$arrRecetas = $this ->Receta->find('all');
			pr($arrRecetas); exit;
	}
}
?>

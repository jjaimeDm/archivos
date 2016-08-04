<?php 
class ArchivoController extends BaseController
{
	public function postStore()
	{
		$ruta = public_path().'/imagenes/';

		$file = Input::file('imagen');
				
        $url_imagen = $file->getClientOriginalName();
     
        $subir = $file->move($ruta,$file->getClientOriginalName());    

        return "Imagen subida con exito";        
	}

	public function getSuma()
	{
		$suma = 10 +10;
		$resta = 1-1;
		return $suma;
	}

	public function postNombre($nombre, $apellido)
	{
		return "el nombre es ".$nombre." ".$apellido;
	}

	public function getNumero()
	{
		$numero = 10;
		/*if(Request::ajax()){
			return Response::json($numero);
		}*/
		return $numero;
	}
}
?>
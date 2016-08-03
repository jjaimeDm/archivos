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
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>subir un archivo</title>
</head>
<body>
	<h1>subir un archivo</h1>

	{{ Form::open(array('url' => 'archivo/store', 'files'=>'true')) }}
    	{{Form::file('imagen');}}
    	{{Form::submit('enviar');}}
	{{ Form::close() }}
	</body>
</html>
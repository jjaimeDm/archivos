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
		{{link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary', 'OnClick'=>"return false;"], $secure = null)}}

	{{ Form::close() }}
	</body>
	{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}

	<script>

		$("#registro" ).click(function() {
			console.log("dentro");
    		$.ajax({
    			type: 'get',
    			url: 'archivo/numero',
    			success:function(respuesta){
    				console.log(respuesta);
    			},
    			error:function(XMLHttpRequest){
    				console.log(XMLHttpRequest);
    			}

    	})

    	});
    	</script>
</html>


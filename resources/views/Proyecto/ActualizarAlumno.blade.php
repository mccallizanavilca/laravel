<!DOCTYPE html>
<html>

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institución</title>
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

</head>

<body>

		<header class="row visible-lg ">
			<div class=" col-lg-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
	
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-8 container  titu">
		
		<h1 class="titulo">Actualizar Alumno</h1>

</div>

	</header>
	<header class="row visible-md ">
		<div class=" col-md-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
	
			<div class=" col-md-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-md-8 container  titu">
		
		<h1 class="titulo">Actualizar Alumno</h1>

</div>
	</header>
		<header class="row visible-sm ">
	<div class=" col-sm-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-sm-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-9 container  titu">
		
		<h1 class="titulo">Actualizar Alumno</h1>

</div>
	</header>
		<header class="row visible-xs">
	<div class=" col-xs-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-xs-1 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-10 container titu">
		
		<h1 class="titulo">Actualizar Alumno</h1>
</div>
	</header>


<div class="visible-lg visible-md visible-sm visible-xs" style="height:20px";></div>

<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
			<div class="input-group busc">
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
         <input type="text" class="form-control" placeholder="Identificacion" required>
           <span class="input-group-addon"><button id="bot">Buscar</button></span>
         </div>
         </div>
    <div class="col-md-3"></div>
         </div>


<div class="container-fluid">
 
<div class="col-md-3"></div>


<form class="col-md-6" style="margin-top:10px;">
	
<table class="actua">
	<tr>
		<td>
			<div class="input-group inp">
 	<label >Nombre</label>
 	<input type="text" class="form-control "  required>
 </div>
</td>

<td class="col"></td>
		<td>
			 	<div class="input-group   inp">
 	<label >Dirección</label>
 	<input type="text" class="form-control "  required>
 </div>
		</td>
	</tr>

	<tr>
		<td>
				<div class="input-group  inp">
 	<label>Apellido</label>
 	 	<input type="text" class="form-control "  required> 
 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	<label>Fecha Nacimiento</label>
 	 	<input type="date" class="form-control "  required> 
 	 </div>	
		</td>
	</tr>

	<tr>
		<td>
			<div class="input-group  inp">
 	 	<label>Identificacion</label>
 	 	 	<input type="text" class="form-control "  required>	 
 	 	 </div>
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	 	<label>Grado</label>
 	 	 	<input type="text" class="form-control "  required>	 
 	 	 </div>
		</td>
	</tr>

	<tr>
		<td>
				 	<div class="input-group  inp">
 	 	 	<label>Sexo</label>
 	 	 	 <select class="form-control">
 	 	 	 	<option value="">Seleccionar</option>
 	 	 	 	<option value="Masculino">Masculino</option>
 	 	 	 	<option value="Femenino">Femenino</option>
 	 	 	 </select>
 	 	 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
			

 	 	 	<div class="input-group  inp">
 	 	 	<label>Grupo</label>
 	 	 	 	<input type="text" class="form-control "  required> 
 	 	 	 </div>	
		</td>
	</tr>

	<tr>
		<td>
				 	<div class="input-group inp">
 	 	 	 	<label>Telefono</label>
 	 	 	 	 	<input type="tel" class="form-control "  required> 
 	 	 	 	 </div>
		</td>

		<td class="col"></td>
		
		<td>
			
		</td>
	</tr>
</table>

<center><button type="submit" class="btn btn-primary form-control regis" style="margin-left:20px;">Actualizar</button><button type="submit" class="btn btn-primary form-control regis" style="margin-left:50px;">Eliminar</button></center>
</form>

<div class="col-md-3"></div>


</div>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>


</html>
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
		<a href="menuactualizarprofesor" >	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-lg-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-lg-6 container  titu">
		
		<h1 class="titulo">Modificar Profesor</h1>

</div>
<div class="col-lg-2 " style="height:76px; background:#2D3E50;">
	<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>
</div>
	</header>

	
	<header class="row visible-md ">
	<div class=" col-md-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-md-3 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-md-6 container  titu">
		
		<h1 class="titulo">Modificar Profesor</h1>

</div>

<div class="col-md-2 " style="height:76px; background:#2D3E50;">
	<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>
</div>
	</header>


		<header class="row visible-sm ">
	<div class=" col-sm-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-sm-2 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-sm-7 container  titu">
		
		<h1 class="titulo">Modificar Profesor</h1>

</div>

<div class="col-sm-2 " style="height:76px; background:#2D3E50;">
	<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>
</div>
	</header>



		<header class="row visible-xs">
	<div class=" col-xs-1 logo container">
		<a href="" onclick="history.back()">	<img src="{{ asset('Iconos/atras.svg') }}" align="right"> </a>
	</div>
			<div class=" col-xs-1 logo container">
				<img src="Iconos/logo2.svg" align="right">
			</div>
		<div class="col-xs-8 container titu">
		
		<h1 class="titulo">Modificar Profesor</h1>
</div>
<div class="col-xs-2 " style="height:76px; background:#2D3E50;">
	<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>
</div>
	</header>


<div class="visible-lg visible-md visible-sm visible-xs" style="height:20px";></div>

<div class="container-fluid">
	<div class="col-md-3"></div>
	{!! Form::open( [ 'route' => 'actualizarprofesor.store', 'class' => 'col-md-6' ] ) !!}
   	@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			<div class="input-group busc">
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
       {!! Form::text('identificacion',null,['class'=>'form-control', 'placeholder'=>'Identificacion']) !!}
         
           <span class="input-group-addon"> {!! Form::button('Buscar', ['type'=>'submit', 'id'=>'bot']) !!}</span>
         </div>

      {!! Form::close( ) !!}
    <div class="col-md-3"></div>
         </div>


<div class="container-fluid">
 
<div class="col-md-3"></div>


<div class="col-md-6" style="margin-top:10px;">
	 @if($prof!=NULL)

	 	 @if($prof=="Actualizado")
	 <div class="alert-success text-center">
	<p>Profesor Actualizado</p>
</div>
	 @else
	
	 @if($prof=="No")

<div class="alert-danger">
	<p>No se econtro información</p>
</div>
@else
	
 {!! Form::open( [ 'route' => 'profesoractualizar.store' ] ) !!}


	@if (count($errors) > 0)
						<div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

	@foreach($prof as $p)
<table>
	<tr>
		<td>
			<div class="input-group   inp">
 		{!!	Form::label('Nombre', 'Nombre') !!}
 	{!! Form::text('nombre1',$p->nombre,['class'=>'form-control']) !!}
 </div>
</td>

<td class="col"></td>
		<td>
			 	<div class="input-group   inp">
 	<label style="margin-top:5px;">Telefono</label>
 	{!! Form::text('telefono1',$p->telefono,['class'=>'form-control']) !!}
 </div>
		</td>
	</tr>

	<tr>
		<td>
				<div class="input-group  inp">
 {!!	Form::label('Apellido', 'Apellido') !!}
 	{!! Form::text('apellido1',$p->apellido,['class'=>'form-control']) !!}
 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	{!!	Form::label('Direccion', 'Direccion') !!}
 	{!! Form::text('direccion1',$p->direccion,['class'=>'form-control']) !!}
 	 </div>	
		</td>
	</tr>

	<tr>
		<td>
			<div class="input-group  inp">
 	 	{!!	Form::label('Identificacion', 'Identificacíon') !!}
 	{!! Form::text('identificacion1',$p->identificacion,['class'=>'form-control','readonly'])!!} 
 	 	 </div>
		</td>

		<td class="col"></td>
		
		<td>
				<div class="input-group  inp">
 	 	{!!	Form::label('Fecha Nacimiento', 'Fecha Nacimiento') !!}
 	{!! Form::text('fechanac1',$p->fechanac,['class'=>'form-control']) !!} 	 
 	 	 </div>
		</td>
	</tr>

	<tr>
		<td>
				 	<div class="input-group  inp sel">
 	 	 	<label>Sexo</label>
 	 	 	{!! Form::select('sexo1',['Masculino'=>'Masculino','Femenino'=>'Femenino'],$p->sexo) !!}
 	 	 	 </div>	
		</td>

		<td class="col"></td>
		
		<td>
			

 	 	 	<div class="input-group  inp">
 	 	 	{!!	Form::label('Titulo', 'Titulo') !!}
 	{!! Form::text('titulo1',$p->titulo,['class'=>'form-control']) !!}
 	 	 	 </div>	
		</td>
	</tr>

	
		
</table>
<br/>
@endforeach



<center>{!! Form::button('Modificar', ['type'=>'submit', 'class'=>'btn btn-primary form-control regis']) !!}</center>
{!! Form::close( ) !!}
@endif
 @endif
 @endif
</div>
<div class="col-md-3"></div>




	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>

 <footer class="footer">
      
        <h5 >Copyright © Todos los derechos reservados Kelly Villareal & Alex Benavides</h5>
  
    </footer>


</html>
<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarSecretariaRequest;
use Illuminate\Http\Request;
use DB;
use App\secretaria;
use App\User;

class RegistrarSecretariaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

 public function __construct()
    {
        $this->middleware('auth');
    }

	
	public function index()
	{
		$mensaje="";
		return view("proyecto.RegistrarSecretaria")->with('mensaje',$mensaje);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegistrarSecretariaRequest $request)
	{
///luego de pasar por las valdaciones del FormRequest insertamos los datos en la BD
$insertar=secretaria::create(['identificacion'=>$request->identificacion,'nombre' =>$request->nombre,'apellido' =>$request->apellido,
				              'sexo' =>$request->sexo,'direccion'=>$request->direccion,'telefono' =>$request->telefono,
				              'fechanac' =>$request->fechanac]);


///creamos el nuevo usuario en la tabla users
$aux=rand();
$usuario=$request->nombre.'_'.$aux;
//Insertamos un nuevo usuario al sistema
$crearUser=User::create(['usuario' => $usuario,'password' =>bcrypt($usuario),'tipo' => 'secre']);


//retornamos a la vista con mensaje de exito y el usuario y contraseña

		$mensaje='Secretaria Registrada con exito (Usuario:'.$usuario.'  Contraseña: '.$usuario.')';
     return view('proyecto.RegistrarSecretaria')->with('mensaje',$mensaje);
	
	}
	

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

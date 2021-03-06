<?php namespace App\Http\Controllers;
use App\curso;
use App\Http\Requests\AsignaturaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\asignatura;
use Illuminate\Http\Request;

class ExAsignaturasController extends Controller {

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
	{		$cursos=curso::all();
			$busqueda=NULL;
		$asignaturas=asignatura::where('estado','=','Inactivo')->paginate(8);
		return  view("proyecto.ExAsignaturas",compact('asignaturas','busqueda','cursos'));
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
public function store(AsignaturaRequest $request)
	{
$asignaturas=asignatura::where('estado','=','Inactivo')->paginate(8);
		
		$nom=$request->nombre;
$busqueda=asignatura::where('nombre','=',$nom)->where('estado','=','Inactivo')->get();
if(count($busqueda)==0){ $busqueda=NULL;}
	$cursos=curso::all();	

		return  view("proyecto.ExAsignaturas",compact('asignaturas','busqueda','cursos'));
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

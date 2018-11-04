<?php namespace GestorImagenes\Http\Controllers;
use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Http\Requests\MostrarFotosRequest;

class FotoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex(MostrarFotosRequest $request)
	{
		$id=$request->get('id');
		$album=Album::find($id);
		$fotos=$album->fotos;
		return view('fotos.mostrar',['fotos'=>$fotos,'id'=>$id]);
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearFoto()
	{
		return 'formulario de crear fotos';
	}
		public function postCrearFoto()
	{
		return 'almacenamiento foto';
	}
		public function getActualizarFoto()
	{
		return 'formulario de actualizar fotos';
	}
		public function postActualizarFoto()
	{
		return 'actualizar foto';
	}
		public function getEliminarFoto()
	{
		return 'formulario de eliminar fotos';
	}
		public function postEliminarFoto()
	{
		return 'eliminando foto';
	}
		public function missingMethod($parameters=array()){
		abort(404);
	}

}

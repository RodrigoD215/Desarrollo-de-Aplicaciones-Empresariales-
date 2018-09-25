<?php namespace GestorImagenes\Http\Controllers;


class UsuarioController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getEditarPerfil()
	{
		return 'Mostrando Formulario';
	}
	public function postEditarPerfil()
	{
		return 'Generando actualizacion del perfil';
	}
	public function missingMethod($parameters=array()){
		abort(404);
	}

}	
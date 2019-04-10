<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
		if(request()->has('empty'))
			$users = [];
		else
			$users = [
				'asdf',
				'asd2',
				'adsdf434',
				'a4wds',
				'<script>alert("omg");</script>'
			];
		
		$title = 'Listado de usuarios';
		//dd(compact('title','users'));
		
		//return view('users', compact('title','users'));
		return view('users.index', compact('title','users'));
	}
	
	public function show($id){
		//return view('users.show', compact('id'));
		return "Mostrando detalle del usuario: {$id}";
	}
	
	public function create(){
		return 'Crear nuevo usuario';
	}
}
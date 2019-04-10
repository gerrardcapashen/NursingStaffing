@extends('layout')
@section('title', 'Usuarios')
@section('userActive', 'active')
@section('userShow', 'show')

@section('users')
@include('tabs')
    <h1>{{ $title }}</h1>
	<ul>
		@forelse ($users as $user)
			<li>{{ $user }}</li>
	    @empty
	        <li>No hay usuarios registrados.</li>
		@endforelse
	</ul>
@endsection
@extends('layouts.app')

@section('title', 'Crear Ropa')

@section('content')
	{!! Form::open(['route' => 'ropa.store', 'method' => 'POST', 'files' => true ]) !!}

		@include('Ropa.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close()!!}
@endsection
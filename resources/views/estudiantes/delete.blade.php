@extends('layouts.app')

@section('content')
    <h1>Eliminar estudiante</h1>
    <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $estudiante->nombres }}"
                    disabled>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $estudiante->apellidos }}"
                    disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $estudiante->email }}"
                    disabled>
            </div>
        </div>
        <br>
        <div  class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Eliminar</button>
                <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>

    </form>
@endsection
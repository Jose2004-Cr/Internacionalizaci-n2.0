@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Asistencia</h1>
    <form action="{{ route('asistencia.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="primer_nombre" class="form-label">Primer Nombre</label>
            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" required>
        </div>
        <!-- Repite los campos para segundo nombre, primer apellido, segundo apellido, etc. -->

        <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <select class="form-control" id="nacionalidad" name="nacionalidad" required>
                <!-- Opciones de países -->
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div class="mb-3">
            <label for="tipo_documento" class="form-label">Tipo de Documento</label>
            <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                <option value="cedula_ciudadania">Cédula de Ciudadanía</option>
                <option value="tarjeta_identidad">Tarjeta de Identidad</option>
                <option value="cedula_extranjeria">Cédula de Extranjería</option>
                <option value="visa">Visa</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="documento_pdf" class="form-label">Documento en PDF</label>
            <input type="file" class="form-control" id="documento_pdf" name="documento_pdf" required>
        </div>

        <div class="mb-3">
            <label for="fecha_expedicion_documento" class="form-label">Fecha de Expedición del Documento</label>
            <input type="date" class="form-control" id="fecha_expedicion_documento" name="fecha_expedicion_documento" required>
        </div>

        <div class="mb-3">
            <label for="evento_id" class="form-label">Evento a Asistir</label>
            <select class="form-control" id="evento_id" name="evento_id" required>
                @foreach($eventos as $evento)
                    <option value="{{ $evento->id }}">{{ $evento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Repite los campos para institución origen, institución destino, programa, tipo rol, etc. -->

        <div class="mb-3">
            <label for="tipo_movilidad" class="form-label">Tipo de Movilidad</label>
            <select class="form-control" id="tipo_movilidad" name="tipo_movilidad" required>
                <option value="entrante">Entrante</option>
                <option value="saliente">Saliente</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="actividad" class="form-label">Actividad que se Realiza</label>
            <select class="form-control" id="actividad" name="actividad" required>
                <!-- Opciones de actividades -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

@extends('layouts.template')

@section('title', 'Zinout Culture')

@section('content')
  <h1 class="text-lg">Lista de Usuarios</h1>

  <div clas="overflow-x-auto">
    <table id="tableUsers" class="table w-full">
      <thead>
        <tr>
          <th title="Username">Username</th>
          <th title="Fullname">Nombres y Apellidos</th>
          <th title="Email">Email</th>
          <th title="Fecha de Creación">Fecha de Creación</th>
          <th title="Estado">Estado</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/home.js') }}" type="text/javascript" defer></script>
@endsection
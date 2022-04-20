@extends('layouts.template')

@section('title', 'Zinout Culture')

@section('content')
  <h2>Lista de Usuarios</h2>

  <table id="tableUsers">
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
@endsection
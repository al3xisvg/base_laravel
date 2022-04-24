@extends('layouts.template')

@section('title', 'Zinout Culture')

@section('content')
  <h1 class="text-lg">Otra Página</h1>

  @foreach ($admins as $admin)
  <div class="card w-80 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">{{ $admin->username }}</h2>
      <p>{{ $admin->email }}</p>
      <div class="card-actions">
        <button id="btnUpd__{{ $admin->id }}" class="btn btn-primary">Editar</button>
        <button id="btnDel__{{ $admin->id }}" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
  @endforeach

@endsection

@push('scripts')
  <script src="{{ asset('js/other.js') }}" type="text/javascript"></script>
@endpush

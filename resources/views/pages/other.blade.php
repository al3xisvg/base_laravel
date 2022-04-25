@extends('layouts.template')

@section('title', 'Zinout Culture')

@section('content')
  <h1 class="text-lg">Otra Página</h1>

  <div class="flex gap-5">
    @foreach ($admins as $admin)
      @if ($admin->id === 0)
        <div key="{{ $admin->id }}" class="card w-80 bg-base-100 shadow-xl cursor-pointer">
          <figure class="px-10 pt-10">
            <a href="#modalAdd">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
            </a>
          </figure>
          <div class="card-body items-center text-center">
            <h1>Agregar Nuevo Admin</h1>
          </div>
        </div>
      @else
        <div key="{{ $admin->id }}" class="card w-80 bg-base-100 shadow-xl">
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
      @endif
    @endforeach
  </div>

  <div id="modalAdd" class="modal">
    <div class="modal-box relative">
    <a class="btn btn-sm btn-circle absolute right-2 top-2" href="#">✕</a>
      <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p> 
      <div class="modal-action">
        <a href="#" class="btn btn-primary">Accept</a> 
        <a href="#" class="btn">Close</a>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
  <script src="{{ asset('js/other.js') }}" type="text/javascript"></script>
@endpush

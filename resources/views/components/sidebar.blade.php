<ul class="menu bg-base-100 shadow-md md:w-64">
  <li class="{{ (request()->is('home')) ? 'bg-gray-500 text-white' : '' }}">
    <a href="{{ route('home') }}">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-7" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
      </svg>  
      <span class="text-sm hidden md:flex">General</span>
    </a>
  </li>
  <li class="{{ (request()->is('other')) ? 'bg-gray-500 text-white' : ''}}">
    <a href="{{ route('other') }}">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-7" viewBox="0 0 20 20" fill="currentColor">
        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
      </svg>
      <span class="text-sm hidden md:flex">Listas Negativas</span>  
    </a>
  </li>
  <li>
    <a href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
      </svg>
      <span class="text-sm hidden md:flex">Canal de Denuncias</span>  
    </a>
  </li>
  <li>
    <a href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
      </svg>
      <span class="text-sm hidden md:flex">Matrices de Riesgo</span>
    </a>
  </li>
</ul>

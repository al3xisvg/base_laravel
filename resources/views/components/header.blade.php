<header>
  <div class="navbar bg-base-100 shadow-md">
    <div class="navbar-start">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="{{ asset('favicon.png') }}" />
        </div>
      </label>
    </div>

    <div class="navbar-center">
      <a class="btn btn-ghost normal-case text-xl">Zinout Culture</a>
    </div>

    <div class="navbar-end">
      <div class="hidden md:flex">
        <ul class="menu menu-horizontal p-0">
          <li><a>Item 1</a></li>
          <li tabindex="0">
            <a>
              Parent
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
            </a>
            <ul class="p-2 bg-base-100">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a href="logout">Logout</a></li>
        </ul>
      </div>

      <div class="md:hidden dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
          <li><a>Homepage</a></li>
          <li><a>Portfolio</a></li>
          <li><a>About</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

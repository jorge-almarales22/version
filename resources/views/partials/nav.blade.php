<nav  class="navbar navbar-light navbar-expand-sm bg-white shadow-sm">
	<div class="container"> 
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name') }}
		</a>
		<button class="navbar-toggler" type="button" 
			data-toggle="collapse" 
			data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" 
			aria-expanded="false" 
			aria-label="{{ __('Toggle navigation') }}">
		    <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
				</li>
				@can('navegar products')
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">Productos</a>
				</li>
				@endcan
				@can('navegar usuarios')
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">Usuarios</a>
				</li>
				@endcan
				@can('navegar roles')
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('roles.index') ? 'active' : '' }}" href="{{ route('roles.index') }}">Roles</a>
				</li>
				@endcan
				@guest
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
				</li>
				@else
				<li class="nav-item">
					<a class="nav-link" 
					href="#" 
					onclick="event.preventDefault();
		         	document.getElementById('logout-form').submit();"
		         	>Cerrar Sesión</a>
		        </li>
				@endguest
			</ul>
	    </div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
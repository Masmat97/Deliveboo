<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<meta name="csrf-token" content="{{ csrf_token() }}">
				<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.js"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">				<title>Deliveboo</title>

				<!-- Fonts -->
				<link rel="dns-prefetch" href="//fonts.gstatic.com">
				<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

				<!-- Usando Vite -->
				@vite(['resources/js/app.js'])
</head>

<body>
				<div id="app">
								<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
												<div class="container">
																<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
																				<div class="">
																								<img src="{{ asset('storage/images/logo_deliveboo.png') }}" alt="" class="img-fluid"
																												style="width: 6rem;">
																				</div>
																</a>

																<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
																				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
																				aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
																				<span class="navbar-toggler-icon"></span>
																</button>

																<div class="collapse navbar-collapse" id="navbarSupportedContent">
																				<!-- Left Side Of Navbar -->

																				<ul class="navbar-nav me-auto">
																								<li class="nav-item">
																												<a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
																								</li>
                                                                                                @auth
																								<li class="nav-item">
																												<a class="nav-link" href="{{ route('admin.restaurants.index') }}">{{ __('Ristorante') }}</a>
																								</li>
                                                                                                <li class="nav-item">
                                                                                                 <a class="nav-link" href="{{ route('admin.dishes.index') }}">{{ __('Menù') }}</a>
                                                                                 </li>

																								<li class="nav-item">
																												<a class="nav-link" href="{{ route('admin.orders.index') }}">{{ __('Ordini') }}</a>
																								</li>
																								<li class="nav-item">
																												<a class="nav-link"
																																href="{{ route('admin.statistics.index') }}">{{ __('Statistiche') }}</a>
																								</li>
                                                                                                @endauth
																				</ul>

																				<!-- Right Side Of Navbar -->
																				<ul class="navbar-nav ms-auto">

																								<!-- Authentication Links -->
																								@guest
																												<li class="nav-item">
																																<a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
																												</li>
																												@if (Route::has('register'))
																																<li class="nav-item">
																																				<a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
																																</li>
																												@endif
																								@else
																												<li class="nav-item dropdown">
																																<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
																																				data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																																				{{ Auth::user()->name }}
																																</a>

																																<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
																																				<a class="dropdown-item"
																																								href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
																																				<a class="dropdown-item" href="{{ route('logout') }}"
																																								onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
																																								{{ __('Logout') }}
																																				</a>

																																				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
																																								@csrf
																																				</form>
																																</div>
																												</li>
																								@endguest
																				</ul>
																</div>
												</div>
								</nav>

								<main class="">
												@yield('content')
								</main>
				</div>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.js"></script>

</body>

</html>



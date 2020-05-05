<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>
</head>

<body>
	<div class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>
		<main class="py-4">
			@yield('content')
		</main>
		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | Copyright @ 2020
		</footer>
	</div>
</body>
</html>
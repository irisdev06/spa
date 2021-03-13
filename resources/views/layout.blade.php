<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/69700c86dd.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/logo.png" sizes="32x32" type="image/png">
    <title>@yield('title')</title>
</head>
<body>
	<div id="app" class="d-flex h-screen justify-content-between flex-column">
		<header>
	    	@include('partials/nav')
	    </header>
	    <main class="py-4">
	    	@yield('content')
	    </main>
	    <footer class="bg-white text-center py-3 text-black-50 shadow">
	    	@include('partials/footer')
	    	Nutresa Spa | Copyright @ {{ date('Y') }}
	    </footer>
    </div>
   </body>
</html>
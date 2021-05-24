<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
           user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Empresas')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body class="container mx-auto w-screen bg-blue-200">
<div id="app">
    <x-layout.cabecera class="h-15v">
    </x-layout.cabecera >
    <nav class="h-10v">
    @yield ("menu")
    </nav>
    <main class="container w-screen  h-65v flex flex-col justify-center items-center bg-green-500">
        @yield("contenido")
    </main>
    <x-layout.footer class="h-10v">

    </x-layout.footer>
    <script src="{{asset('js/app.js')}}"></script>
</div>
</body>
</html>

<header class="flex flex-row justify-between  items-center p-5 h-15v bg-gradient-to-b bg-yellow-500">
    <img src="{{asset("images/logo.png")}}" class="max-h-full rounded-3xl"alt="Logo de empresa" />
    <h1 class="text-8xl text-blue-900 ">Nombre de empresa</h1>
    <div class="flex flex-col justify-center ">
        <x-form.a_href class="my-1" href="{{route('login')}}">Login</x-form.a_href>
        <x-form.a_href class="my-1"  href="{{route('register')}}">Registrase</x-form.a_href>
    </div>
</header>

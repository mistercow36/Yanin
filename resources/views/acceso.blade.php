@extends ("layout")
@section("menu")
    <x-layout.menu class="justify-start">
        <x-form.a_href href="{{route('factura.index')}}" class="mx-2">Facturas</x-form.a_href>
        <x-form.a_href href="{{route('cliente.index')}}" class="mx-2">Clientes</x-form.a_href>
        <x-form.a_href href="{{route('empleado.index')}}" class="mx-2">Empelados</x-form.a_href>
    </x-layout.menu>
@endsection

@section("contenido")
    <div class="max-w-full max-h-full flex flex-row justify-center">
    <img  src="{{asset("images/uml.png")}}" alt="uml">
    </div>
@endsection


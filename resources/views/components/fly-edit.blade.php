@php
    $rota = Route::currentRouteName();
@endphp

@if(Str::startsWith($rota, 'flies.show'))
    <a href="{{ route('flies.edit', $fly,false) }}" class="block py-2 px-3 hover:text-green-600">
        Edite sua Fly
    </a>
@endif
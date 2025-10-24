@php
    $rotaAtual = Route::currentRouteName();
@endphp

@if (in_array($rotaAtual, ['welcome','flies.create', 'flies.show', 'flies.edit'] ))
    <a href="{{ route('flies.index', [], false) }}" class="block py-2 px-3 hover:text-green-600">Flies</a>
@endif


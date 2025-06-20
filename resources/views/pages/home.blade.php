@extends('layout.master')

@section('content')

<div class="hero py-20">
    <div class="hero-content flex-col lg:flex-row">
        <img src="images/ondeEstaMeuPetHome.png" class="w-80 h-auto max-w-sm rounded-lg" />
        <div>
            <h1 class="text-5xl font-logo">Onde Está Meu Bichinho?</h1>
            <p class="py-6">
                Te ajudamos a encontrar seu bichinho, aqui você pode publicar e ajudar outras pessoas.
            </p>
            <a href="{{ route('bichinhos.create') }}"> <button class="btn btn-primary">Perdi Meu Bichinho</button></a>
        </div>
    </div>
</div>
<div class="text-center my-10">
    <h2 class="text-3xl font-bold text-gray-800">Pets Perdidos Recentes</h2>
</div>
<div class="flex flex-wrap justify-center gap-6 my-10 px-4">
    @forelse ($bichinhos as $bichinho)
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="{{ $bichinho->foto ? asset('storage/' . $bichinho->foto) : 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}"
                alt="Foto do {{ $bichinho->nome }}" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ $bichinho->nome }}</h2>
            <p>Último local: {{ $bichinho->ultimo_local ?? 'Não informado' }}</p>
            <!--
            <div class="card-actions justify-end">
                <a href="{{ route('bichinhos.show', $bichinho->id) }}" class="btn btn-primary">Ver Detalhes</a>
            </div>
-->
        </div>
    </div>
    @empty
    <p>Nenhum bichinho perdido recentemente.</p>
    @endforelse
</div>

@endsection
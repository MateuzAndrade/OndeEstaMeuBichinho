@extends('layout.master')

@section('content')
<div class="container">
    <h1 class="mb-4">Mural de Bichinhos Perdidos</h1>
    <div class="row">
        @forelse($bichinhos as $bichinho)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($bichinho->foto)
                <img src="{{ asset('storage/' . $bichinho->foto) }}" class="card-img-top" alt="Foto do bichinho">
                @else
                <img src="{{ asset('images/sem-foto.jpg') }}" class="card-img-top" alt="Sem foto">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $bichinho->nome }}</h5>
                    <p class="card-text">
                        Raça: {{ $bichinho->raca ?? 'Não informada' }}<br>
                        Último local visto: {{ $bichinho->ultimo_local ?? 'Não informado' }}
                    </p>
                </div>
                <div class="card-footer">
                    <small>Responsável: {{ $bichinho->nome_responsavel }}</small><br>
                    <small>Contato: {{ $bichinho->telefone }}</small>
                </div>
            </div>
        </div>
        @empty
        <p class="text-muted">Nenhum bichinho encontrado no mural.</p>
        @endforelse
    </div>
</div>
@endsection
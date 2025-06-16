@extends('layout.master')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Cadastrar Bichinho</h2>
    <form action="{{ route('bichinhos.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block">Nome</label>
            <input type="text" name="nome" id="nome" class="input input-bordered w-full" required>
        </div>

        <div class="mb-4">
            <label for="tipo" class="block">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="input input-bordered w-full" required>
        </div>

        <div class="mb-4">
            <label for="descricao" class="block">Descrição</label>
            <textarea name="descricao" id="descricao" class="textarea textarea-bordered w-full"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
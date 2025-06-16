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
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Card Title</h2>
            <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Card Title</h2>
            <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Card Title</h2>
            <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</div>

@endsection
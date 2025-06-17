@extends('layout.master')

@section('content')
<div class="max-w-md mx-auto mt-10 px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold mb-4">Cadastrar Bichinho</h2>
    <p class="mt-1 text-sm/6 text-gray-600">
        Sentimos muito pela perca de seu bichinho, vamos te ajudar a encontrar, para isto precisamos de algumas
        informações,
        depois deste cadastro seu bichinho estará no nosso mural, e o contato que informar irá ajudar a outras pessoas a
        falar com você quando encontrar seu pet.
    </p>
    <form action="{{ route('bichinhos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <label for="nome" class="block text-sm/6 font-medium text-gray-900">Nome de Seu Bichinho</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300
                                focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="nome" id="nome" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400
                                    focus:outline-none sm:text-sm/6" placeholder="insira aqui" />
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="raca" class="block text-sm/6 font-medium  text-gray-900">Raça</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300
                                focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="raca" id="raca" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400
                                    focus:outline-none sm:text-sm/6"
                                    placeholder="exemplo, gato, cachorro, papagaio.." />
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="descricao" class="block text-sm/6 font-medium text-gray-900">Descrição de Seu
                            Bichinho</label>
                        <div class="mt-2 border">
                            <textarea
                                placeholder="Aqui você pode falar sobre a cor, tamanho, o que ele gosta de comer ou brincar, para facilitar a busca por seu bichinho."
                                name="descricao" id="descricao" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300
                                placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="ultimo_local" class="block text-sm/6 font-medium text-gray-900">Onde foi visto a
                            última vez</label>
                        <div class="mt-2 border">
                            <textarea
                                placeholder="Aqui você pode falar quando viu seu bichinho pela ultima vez, como localização e demais informações que possam ajudar a localizar."
                                name="ultimo_local" id="ultimo_local" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300
                                placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="foto" class="block text-sm/6 font-medium text-gray-900">Foto do seu bichinho</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                    <label for="foto"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600
                                        focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                        <span>Selecionar Foto</span>
                                        <input id="foto" name="foto" type="file" class="sr-only" />
                                    </label>
                                    <p class="pl-1">Ou arraste e solte</p>
                                </div>
                                <p class="text-xs/5 text-gray-600">PNG, JPG tamanho máximo de 10MB</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Sobre Você</h2>
                <p class="mt-1 text-sm/6 text-gray-600">
                    Precisamos de seus dados pois será assim que outras pessoas irão te ajudar, informe seu melhor
                    contato e e-mail.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="nome_responsavel" class="block text-sm/6 font-medium text-gray-900">Nome</label>
                        <div class="mt-2">
                            <input type="text" name="nome_responsavel" id="nome_responsavel" autocomplete="given-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400
                                focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="telefone" class="block text-sm/6 font-medium text-gray-900">Telefone para contato
                            com DDD</label>
                        <div class="mt-2">
                            <input type="tel" name="telefone" id="telefone" autocomplete="tel"
                                placeholder="(83) 91234-5678" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400
                                focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email para contato</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400
                                focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancelar</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500
                focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar
                Bichinho</button>
        </div>
    </form>
</div>
@endsection
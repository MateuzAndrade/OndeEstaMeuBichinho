    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <a href="/" class="flex items-center font-logo ml-20">
                <div class="flex flex-col leading-tight">
                    <span class="text-lg font-light">ONDE ESTÁ</span>
                    <span class="text-sm font-light">MEU BICHINHO</span>
                </div>
                <span class="text-5xl font-logo">?</span>
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href=" {{ route(name: 'pages.home') }}">Início</a></li>
                <li><a href=" {{ route(name: 'bichinhos.create') }}">Perdi</a></li>
                <li><a href="{{ route('bichinhos.mural') }}">Mural</a></li>
                <li><a>Encontrei</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://videocdn.pollo.ai/web-cdn/pollo/text2image/style/3d-render.png" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between">
                            Minha Conta
                        </a>
                    </li>
                    <li><a>Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
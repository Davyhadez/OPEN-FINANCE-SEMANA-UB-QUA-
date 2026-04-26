<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Finance - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 font-sans flex">

    <aside class="w-64 bg-white h-screen border-r border-gray-200 flex flex-col p-6 fixed">
        <div class="flex flex-col items-center mb-12">
            <div class="mb-4 text-[#102C70]">
                <i class="fa-solid fa-gem text-3xl"></i> </div>

            <div class="text-center">
                <h1 class="text-5xl font-black text-[#0A1931] tracking-tighter uppercase leading-none">
                    Rupee
                </h1>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.5em] mt-2 ml-1">
                    Open Finance
                </p>
            </div>
        </div>
        
        <nav class="space-y-2">
            <a href="{{ route('dashboard') }}" 
            class="flex items-center gap-3 p-3 rounded-xl transition {{ Request::is('dashboard') ? 'bg-[#102C70] text-white shadow-md' : 'text-gray-500 hover:bg-gray-100' }}">
                <i class="fa-solid fa-table-columns"></i> Dashboard
            </a>

            <a href="{{ route('contas') }}" 
            class="flex items-center gap-3 p-3 rounded-xl transition {{ Request::is('contas') ? 'bg-[#102C70] text-white shadow-md' : 'text-gray-500 hover:bg-gray-100' }}">
                <i class="fa-solid fa-wallet"></i> Minhas Contas
            </a>

            <a href="{{ route('configuracoes') }}" 
            class="flex items-center gap-3 p-3 rounded-xl transition {{ Request::is('configuracoes') ? 'bg-[#102C70] text-white shadow-md' : 'text-gray-500 hover:bg-gray-100' }}">
                <i class="fa-solid fa-gear"></i> Configurações
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-10">
                @csrf
                <button type="submit" class="flex items-center gap-3 p-3 w-full text-red-500 hover:bg-red-50 rounded-xl transition font-medium">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Sair
                </button>
            </form>
        </nav>
    </aside>

    <main class="ml-64 flex-1 p-10" 
        x-data="{ show: false }" 
        x-init="setTimeout(() => show = true, 50)"> <div x-show="show"
            x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 translate-y-8"
            x-transition:enter-end="opacity-100 translate-y-0">
        
            @yield('content')
        
        </div>
    </main>

</body>
</html>
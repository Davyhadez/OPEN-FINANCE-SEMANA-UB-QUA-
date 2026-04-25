@extends('layouts.app')

@section('title', 'Minhas Contas')

@section('content')
    <div x-data="{ show: false }" 
         x-init="setTimeout(() => show = true, 50)" 
         x-show="show"
         x-transition:enter="transition ease-out duration-700"
         x-transition:enter-start="opacity-0 translate-y-8"
         x-transition:enter-end="opacity-100 translate-y-0">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-[28px] font-bold text-[#0A1931] tracking-tight">Minhas Contas</h1>
                <p class="text-[#64748b] text-lg mt-1 font-medium">Gerencie suas instituições conectadas via Open Finance.</p>
            </div>
            <button class="bg-[#102C70] hover:bg-[#0A1D4A] text-white px-6 py-3 rounded-xl font-bold transition-all shadow-md active:scale-95">
                Adicionar Instituição
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @php
                $contas = [
                    ['banco' => 'Nubank', 'tipo' => 'Conta Corrente', 'saldo' => 'R$ 3.450,80', 'cor' => 'text-slate-900'],
                    ['banco' => 'Itaú', 'tipo' => 'Conta Corrente', 'saldo' => 'R$ 1.240,00', 'cor' => 'text-slate-900'],
                    ['banco' => 'XP Investimentos', 'tipo' => 'Investimento', 'saldo' => 'R$ 15.400,50', 'cor' => 'text-slate-900'],
                    ['banco' => 'C6 Bank', 'tipo' => 'Cartão de Crédito', 'saldo' => '-R$ 850,40', 'cor' => 'text-red-500'],
                ];
            @endphp

            @foreach($contas as $conta)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col overflow-hidden group">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-[#0A1931]">{{ $conta['banco'] }}</h3>
                        <span class="bg-[#ECFDF5] text-[#059669] text-[12px] font-bold px-2 py-1 rounded-md flex items-center gap-1.5 border border-[#D1FAE5]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                            Sincronizado
                        </span>
                    </div>
                    
                    <p class="text-sm text-slate-400 font-medium mb-1">{{ $conta['tipo'] }}</p>
                    
                    <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Saldo atual</p>
                    <p class="text-2xl font-black {{ $conta['cor'] }} mt-1">{{ $conta['saldo'] }}</p>
                </div>

                <div class="h-[1px] w-full bg-gray-50"></div>

                <a href="#" class="p-4 flex justify-between items-center hover:bg-slate-50 transition-colors group">
                    <span class="text-sm font-bold text-slate-500 group-hover:text-[#102C70]">Ver detalhes</span>
                    <i class="fa-solid fa-chevron-right text-xs text-slate-300 group-hover:text-[#102C70] transition-transform group-hover:translate-x-1"></i>
                </a>
            </div>
            @endforeach

            <button class="bg-white rounded-2xl border-2 border-dashed border-slate-200 p-8 flex flex-col items-center justify-center text-center hover:border-blue-300 hover:bg-blue-50/30 transition-all group min-h-[220px]">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 mb-4 group-hover:scale-110 group-hover:bg-white group-hover:shadow-sm transition-all">
                    <i class="fa-solid fa-wallet text-2xl"></i>
                </div>
                <h4 class="font-bold text-[#0A1931] mb-2">Conectar nova conta</h4>
                <p class="text-sm text-slate-400 px-4">Agregue mais bancos para ter uma visão completa das suas finanças.</p>
            </button>

        </div>
    </div>
@endsection
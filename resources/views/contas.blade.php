@extends('layouts.app')

@section('title', 'Minhas Contas')

@section('content')
    <div x-data="{ show: false, modalAberto: false }" 
         x-init="setTimeout(() => show = true, 50)" 
         x-show="show"
         x-transition:enter="transition ease-out duration-700"
         x-transition:enter-start="opacity-0 translate-y-8"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="relative">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-[28px] font-bold text-[#0A1931] tracking-tight">Minhas Contas</h1>
                <p class="text-[#64748b] text-lg mt-1 font-medium">Gerencie suas instituições conectadas via Open Finance.</p>
            </div>
            <button @click="modalAberto = true" class="bg-[#102C70] hover:bg-[#0A1D4A] text-white px-6 py-3 rounded-xl font-bold transition-all shadow-md active:scale-95">
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

            <button @click="modalAberto = true" class="bg-white rounded-2xl border-2 border-dashed border-slate-200 p-8 flex flex-col items-center justify-center text-center hover:border-blue-300 hover:bg-blue-50/30 transition-all group min-h-[220px]">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 mb-4 group-hover:scale-110 group-hover:bg-white group-hover:shadow-sm transition-all">
                    <i class="fa-solid fa-wallet text-2xl"></i>
                </div>
                <h4 class="font-bold text-[#0A1931] mb-2">Conectar nova conta</h4>
                <p class="text-sm text-slate-400 px-4">Agregue mais bancos para ter uma visão completa das suas finanças.</p>
            </button>
        </div>

        
        <div x-show="modalAberto" 
            class="fixed inset-0 z-[99] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            style="display: none;">
            
            <div @click.away="modalAberto = false" 
                class="bg-white w-full max-w-xl rounded-[32px] shadow-2xl overflow-hidden"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="scale-95 translate-y-8 opacity-0"
                x-transition:enter-end="scale-100 translate-y-0 opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="scale-100 translate-y-0 opacity-100"
                x-transition:leave-end="scale-95 translate-y-8 opacity-0">
                
                <div class="p-8 border-b border-gray-50 flex justify-between items-center">
                    <h3 class="text-2xl font-bold text-[#0A1931]">Conectar Banco</h3>
                    <button @click="modalAberto = false" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-red-50 hover:text-red-500 transition-all">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>

                <div class="p-8 grid grid-cols-2 gap-4">
                    <button class="p-6 border border-gray-100 rounded-3xl hover:border-orange-200 hover:bg-orange-50 transition-all group text-center">
                        <div class="w-12 h-12 bg-orange-500 rounded-2xl mx-auto mb-3 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-building-columns text-xl"></i>
                        </div>
                        <span class="font-bold text-[#0A1931]">Itaú Unibanco</span>
                    </button>

                    <button class="p-6 border border-gray-100 rounded-3xl hover:border-purple-200 hover:bg-purple-50 transition-all group text-center">
                        <div class="w-12 h-12 bg-purple-600 rounded-2xl mx-auto mb-3 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-n text-xl"></i>
                        </div>
                        <span class="font-bold text-[#0A1931]">Nubank</span>
                    </button>

                    <button class="p-6 border border-gray-100 rounded-3xl hover:border-yellow-200 hover:bg-yellow-50 transition-all group text-center">
                        <div class="w-12 h-12 bg-[#F7D116] rounded-2xl mx-auto mb-3 flex items-center justify-center text-[#0038A8] shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-b text-xl"></i>
                        </div>
                        <span class="font-bold text-[#0A1931]">Banco do Brasil</span>
                    </button>

                    <button class="p-6 border border-gray-100 rounded-3xl hover:border-red-200 hover:bg-red-50 transition-all group text-center">
                        <div class="w-12 h-12 bg-[#EC0000] rounded-2xl mx-auto mb-3 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-fire-flame-curved text-xl"></i>
                        </div>
                        <span class="font-bold text-[#0A1931]">Santander</span>
                    </button>
                </div>

                <div class="p-6 bg-gray-50 flex items-center justify-center gap-2">
                    <i class="fa-solid fa-lock text-emerald-500 text-xs"></i>
                    <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">Ambiente Seguro Open Finance</span>
                </div>
            </div>
        </div>
    </div>
@endsection
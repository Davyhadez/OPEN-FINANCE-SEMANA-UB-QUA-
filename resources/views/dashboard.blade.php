@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div x-data="{ show: false }" 
         x-init="setTimeout(() => show = true, 50)" 
         x-show="show"
         x-transition:enter="transition ease-out duration-700"
         x-transition:enter-start="opacity-0 translate-y-8"
         x-transition:enter-end="opacity-100 translate-y-0"
         style="display: none;">

        <div class="bg-white rounded-2xl p-8 mb-8 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-100 flex justify-between items-center">
            <div class="mb-10 space-y-6">
                <div>
                    <h1 class="text-xl font-black text-[#0A1931] uppercase tracking-tighter">
                        Seja bem-vindo, 
                        <span class="text-[#102C70]">
                            @php
                                $nameParts = explode(' ', Auth::user()->name);
                                $firstName = $nameParts[0];
                                $lastName = count($nameParts) > 1 ? end($nameParts) : '';
                            @endphp
                            {{ $firstName }} {{ $lastName }}
                        </span>
                    </h1>
                    <div class="h-1 w-12 bg-[#102C70] mt-2"></div> </div>

                    <h2 class="text-[24px] font-black text-[#0A1931] uppercase tracking-tight">
                        Visão Geral
                    </h2>
                    <p class="text-slate-500 text-sm font-bold uppercase tracking-widest mt-1">
                        Acompanhe todas as suas contas em um só lugar
                    </p>
                
            </div>

            <div x-data="{ open: false }"> 
                <button @click="open = true" class="bg-[#102C70] hover:bg-[#0A1D4A] text-white px-7 py-3.5 rounded-lg font-semibold flex items-center gap-2 transition-all shadow-md active:scale-95">
                    <span class="text-xl leading-none">+</span>
                    <span>Conectar Nova Conta Bancária</span>
                </button>

                <div x-show="open" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm" 
                    style="display: none;">
                    
                    <div @click.away="open = false" 
                        class="bg-white rounded-3xl w-full max-w-lg shadow-2xl overflow-hidden transform transition-all">
                        
                        <div class="p-8 pb-0 flex justify-between items-start">
                            <div>
                                <h2 class="text-2xl font-bold text-[#0A1931]">Conectar Nova Instituição</h2>
                                <p class="text-slate-500 mt-2 text-sm leading-relaxed">
                                    Selecione o banco que deseja conectar via Open Finance.
                                </p>
                            </div>
                            <button @click="open = false" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-red-50 hover:text-red-500 transition-all">
                                <i class="fa-solid fa-xmark text-xl"></i>
                            </button>
                        </div>

                        <div class="p-8 grid grid-cols-2 gap-4">
                            <button class="flex flex-col items-center justify-center p-6 border border-slate-100 rounded-2xl hover:bg-slate-50 hover:border-blue-200 transition-all group">
                                <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center text-white mb-3 shadow-sm group-hover:scale-110 transition">
                                    <i class="fa-solid fa-building-columns"></i>
                                </div>
                                <span class="font-bold text-[#0A1931]">Itaú Unibanco</span>
                            </button>

                            <button class="flex flex-col items-center justify-center p-6 border border-slate-100 rounded-2xl hover:bg-slate-50 hover:border-blue-200 transition-all group">
                                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white mb-3 shadow-sm group-hover:scale-110 transition">
                                    <i class="fa-solid fa-n"></i>
                                </div>
                                <span class="font-bold text-[#0A1931]">Nubank</span>
                            </button>

                            <button class="flex flex-col items-center justify-center p-6 border border-slate-100 rounded-2xl hover:bg-slate-50 hover:border-blue-200 transition-all group">
                                <div class="w-12 h-12 bg-[#F7D116] rounded-xl flex items-center justify-center text-[#0038A8] mb-3 shadow-sm group-hover:scale-110 transition">
                                    <i class="fa-solid fa-b"></i>
                                </div>
                                <span class="font-bold text-[#0A1931]">Banco do Brasil</span>
                            </button>

                            <button class="flex flex-col items-center justify-center p-6 border border-slate-100 rounded-2xl hover:bg-slate-50 hover:border-blue-200 transition-all group">
                                <div class="w-12 h-12 bg-[#EC0000] rounded-xl flex items-center justify-center text-white mb-3 shadow-sm group-hover:scale-110 transition">
                                    <i class="fa-solid fa-fire-flame-curved"></i>
                                </div>
                                <span class="font-bold text-[#0A1931]">Santander</span>
                            </button>
                        </div>

                        <div class="p-6 bg-slate-50 flex justify-center">
                            <button @click="open = false" class="text-slate-500 font-bold hover:text-slate-700 transition">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start text-gray-400 mb-4">
                    <span class="text-sm font-medium">Saldo Total Consolidado</span>
                    <i class="fa-regular fa-clock"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900">R$ 19.241,30</h2>
                <p class="text-emerald-500 text-sm font-medium mt-2">↑ +2.5% <span class="text-gray-400 font-normal">desde o mês passado</span></p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start text-gray-400 mb-4">
                    <span class="text-sm font-medium">Saldo em Conta Corrente</span>
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900">R$ 4.690,80</h2>
                <p class="text-gray-400 text-sm mt-2">Disponível para uso</p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start text-gray-400 mb-4">
                    <span class="text-sm font-medium text-red-400">Faturas de Crédito</span>
                    <i class="fa-regular fa-credit-card"></i>
                </div>
                <h2 class="text-3xl font-bold text-red-500">R$ 850,40</h2>
                <p class="text-gray-400 text-sm mt-2">Vencimento próximo em 5 dias</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border-t-4 border-t-[#102C70] border-gray-100 overflow-hidden">
            <div class="p-8 border-b border-gray-50 flex justify-between items-center">
                <h3 class="text-xl font-bold text-[#0A1931]">Últimas Transações</h3>
            </div>
            <div class="overflow-x-auto px-4 pb-4"> 
                <table class="w-full text-left">
                    <thead class="bg-[#F8FAFC] text-slate-500 text-xs uppercase font-bold">
                        <tr>
                            <th class="px-10 py-4">Data</th>
                            <th class="px-10 py-4">Descrição</th>
                            <th class="px-10 py-4">Categoria</th>
                            <th class="px-10 py-4 text-right">Valor</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Starbucks</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Alimentação
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 24,50</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Uber</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Transporte
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 35,50</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Mercado livre</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Compras
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 9,99</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Ifood</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Alimentação
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 50,50</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Starbucks</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Alimentação
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 24,50</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Posto Shell</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Transporte
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 100,00</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Netflix</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Assinaturas
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 29,50</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Spotify</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Assinaturas
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 9,50</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Tranferência Pix</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Transferências
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[#0A1931]">-R$ 30,00</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-10 py-6 text-slate-600 text-sm">24 abr, 2026</td>
                            <td class="px-10 py-6 font-bold text-[#0A1931]">Salário</td>
                            <td class="px-10 py-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[11px] font-bold uppercase">
                                    Renda
                                </span>
                            </td>
                            <td class="px-10 py-6 text-right font-bold text-[green]">+R$ 8.000,00</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
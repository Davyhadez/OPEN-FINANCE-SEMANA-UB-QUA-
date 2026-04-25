@extends('layouts.app')

@section('title', 'Configurações')

@section('content')
    <div class="mb-8">
        <h1 class="text-[28px] font-bold text-[#0A1931] tracking-tight">Configurações</h1>
        <p class="text-[#64748b] text-lg mt-1 font-medium">Gerencie suas preferências, alertas e consentimentos do Open Finance.</p>
    </div>

    <div class="space-y-8">
        
        <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-50 flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-[#102C70]">
                    <i class="fa-regular fa-user text-xl"></i>
                </div>
                <div>
                    <h2 class="font-bold text-[#0A1931]">Perfil do Usuário</h2>
                    <p class="text-sm text-slate-500">Atualize suas informações pessoais.</p>
                </div>
            </div>
            <div class="p-8">
                <form action="#" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-[#0A1931] mb-2">Nome Completo</label>
                            <input type="text" value="João Silva" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#102C70] focus:border-transparent outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#0A1931] mb-2">E-mail</label>
                            <input type="email" value="joao.silva@exemplo.com" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#102C70] focus:border-transparent outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#0A1931] mb-2">CPF</label>
                            <input type="text" placeholder="123.456.789-00" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-400 cursor-not-allowed" disabled>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#0A1931] mb-2">Celular</label>
                            <input type="text" value="(11) 98765-4321" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#102C70] outline-none transition">
                        </div>
                    </div>
                    <button type="submit" class="bg-[#102C70] text-white px-8 py-3 rounded-xl font-bold hover:bg-[#0A1D4A] transition-all shadow-md">
                        Salvar Alterações
                    </button>
                </form>
            </div>
        </section>

        <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-50 flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-[#102C70]">
                    <i class="fa-regular fa-bell text-xl"></i>
                </div>
                <div>
                    <h2 class="font-bold text-[#0A1931]">Notificações</h2>
                    <p class="text-sm text-slate-500">Escolha quais alertas você deseja receber.</p>
                </div>
            </div>
            <div class="p-6 divide-y divide-gray-50">
                <div class="py-4 flex justify-between items-center">
                    <div>
                        <p class="font-bold text-[#0A1931]">Resumo Semanal</p>
                        <p class="text-sm text-slate-500">Receba um relatório consolidado das suas finanças.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#102C70]"></div>
                    </label>
                </div>
                <div class="py-4 flex justify-between items-center">
                    <div>
                        <p class="font-bold text-[#0A1931]">Alerta de Gastos Elevados</p>
                        <p class="text-sm text-slate-500">Aviso quando uma transação exceder R$ 1.000,00.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#102C70]"></div>
                    </label>
                </div>
            </div>
        </section>

        <section class="bg-red-50/30 rounded-2xl shadow-sm border border-red-100 overflow-hidden">
            <div class="p-6 border-b border-red-100 flex items-center gap-3">
                <div class="w-10 h-10 bg-red-100/50 rounded-lg flex items-center justify-center text-red-600">
                    <i class="fa-solid fa-shield-halved text-xl"></i>
                </div>
                <div>
                    <h2 class="font-bold text-[#0A1931]">Consentimentos & Segurança</h2>
                    <p class="text-sm text-slate-500">Gerencie as conexões ativas com instituições financeiras.</p>
                </div>
            </div>
            <div class="p-8">
                <div class="bg-white border border-gray-100 rounded-xl p-4 mb-8 flex gap-4 items-start">
                    <i class="fa-solid fa-circle-info text-blue-500 mt-1"></i>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        <strong>Privacidade Garantida:</strong> O Open Finance permite que você revogue o acesso aos seus dados a qualquer momento. Suas informações nunca são compartilhadas sem sua autorização explícita.
                    </p>
                </div>

                <h3 class="font-bold text-[#0A1931] mb-4">Instituições Conectadas</h3>
                <div class="space-y-3">
                    @foreach(['Nubank', 'Itaú', 'XP Investimentos', 'C6 Bank'] as $banco)
                    <div class="bg-white p-4 rounded-xl border border-gray-100 flex justify-between items-center group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-slate-50 rounded-full flex items-center justify-center text-slate-400 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors">
                                <i class="fa-solid fa-link text-sm"></i>
                            </div>
                            <div>
                                <p class="font-bold text-[#0A1931]">{{ $banco }}</p>
                                <p class="text-xs text-slate-400">Autorizado válido até: 12/12/2024</p>
                            </div>
                        </div>
                        <button class="text-red-500 text-sm font-bold border border-red-100 px-4 py-2 rounded-lg hover:bg-red-500 hover:text-white transition-all">
                            Revogar Acesso
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection
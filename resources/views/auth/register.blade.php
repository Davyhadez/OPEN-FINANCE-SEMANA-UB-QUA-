<x-guest-layout>
    <div class="flex flex-col items-center mb-6">
        <div class="mb-2 text-[#102C70]">
            <i class="fa-solid fa-gem text-2xl"></i>
        </div>

        <div class="text-center">
            <h1 class="text-4xl font-black text-[#0A1931] tracking-tighter uppercase leading-none">
                Rupee
            </h1>
            <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em] mt-1">
                Open Finance
            </p>
        </div>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label for="name" class="block text-[9px] font-black text-[#0A1931] uppercase tracking-widest">Nome</label>
                <input id="name" type="text" name="name" :value="old('name')" required placeholder="Nome Completo"
                    class="w-full p-3 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-xs font-medium">
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="space-y-1">
                <label for="email" class="block text-[9px] font-black text-[#0A1931] uppercase tracking-widest">E-mail</label>
                <input id="email" type="email" name="email" :value="old('email')" required placeholder="usuario@dominio.com"
                    class="w-full p-3 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-xs font-medium">
                <x-input-error :messages="$errors->get('email')" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label for="cpf" class="block text-[9px] font-black text-[#0A1931] uppercase tracking-widest">CPF</label>
                <input id="cpf" type="text" name="cpf" :value="old('cpf')" required placeholder="000.000.000-00"
                    class="w-full p-3 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-xs font-medium">
                <x-input-error :messages="$errors->get('cpf')" />
            </div>

            <div class="space-y-1">
                <label for="phone" class="block text-[9px] font-black text-[#0A1931] uppercase tracking-widest">Telefone</label>
                <input id="phone" type="text" name="phone" :value="old('phone')" required placeholder="(00) 00000-0000"
                    class="w-full p-3 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-xs font-medium">
                <x-input-error :messages="$errors->get('phone')" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label for="password" class="block text-[9px] font-black text-[#0A1931] uppercase tracking-widest">Senha</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <i class="fa-solid fa-lock text-[10px]"></i>
                    </span>
                    <input id="password" type="password" name="password" required placeholder="••••••••"
                        class="w-full pl-9 pr-3 py-3 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-xs font-medium">
                </div>
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="space-y-1">
                <label for="password_confirmation" class="block text-[9px] font-black text-[#0A1931] uppercase tracking-widest">Confirmar senha</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <i class="fa-solid fa-lock text-[10px]"></i>
                    </span>
                    <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="••••••••"
                        class="w-full pl-9 pr-3 py-3 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-xs font-medium">
                </div>
            </div>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-[#102C70] text-white py-4 rounded-none font-black text-[10px] uppercase tracking-[0.2em] hover:bg-[#0A1D4A] transition-all">
                CRIAR CONTA RUPEE
            </button>
        </div>

        <div class="text-center pt-4 border-t border-slate-100">
            <p class="text-slate-400 text-[12px] font-bold uppercase">
                Já tem acesso? <a href="{{ route('login') }}" class="text-[#102C70] underline">Login</a>
            </p>
        </div>
    </form>
</x-guest-layout>
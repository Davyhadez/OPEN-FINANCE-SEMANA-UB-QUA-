<x-guest-layout>
    <div class="flex flex-col items-center mb-12">
        <div class="mb-4 text-[#102C70]">
            <i class="fa-solid fa-gem text-3xl"></i>
        </div>

        <div class="text-center">
            <h1 class="text-5xl font-black text-[#0A1931] tracking-tighter uppercase leading-none">
                Rupee
            </h1>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.5em] mt-2 ml-1">
                Open Finance
            </p>
        </div>
    </div>

    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-8">
        @csrf

        <div class="space-y-3">
            <label for="email" class="block text-[11px] font-black text-[#0A1931] uppercase tracking-[0.2em]">E-mail Corporativo</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                    <i class="fa-regular fa-envelope text-sm"></i>
                </span>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                    class="w-full pl-11 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-sm font-medium"
                    placeholder="usuario@dominio.com">
            </div>
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="space-y-3">
            <div class="flex justify-between items-end">
                <label for="password" class="text-[11px] font-black text-[#0A1931] uppercase tracking-[0.2em]">Senha de Segurança</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-[10px] font-black text-[#102C70] uppercase hover:underline">Recuperar</a>
                @endif
            </div>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                    <i class="fa-solid fa-lock text-sm"></i>
                </span>
                <input id="password" type="password" name="password" required 
                    class="w-full pl-11 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-none focus:ring-0 focus:border-[#102C70] outline-none transition text-sm font-medium"
                    placeholder="••••••••••••">
            </div>
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <label class="flex items-center cursor-pointer group">
            <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 rounded-none border-slate-300 text-[#102C70] focus:ring-0">
            <span class="ml-3 text-[12px] font-bold text-slate-500 uppercase tracking-tight group-hover:text-slate-700 transition-colors">Manter sessão ativa no sistema</span>
        </label>

        <button type="submit" class="w-full bg-[#102C70] text-white py-5 rounded-none font-black text-xs uppercase tracking-[0.3em] hover:bg-[#0A1D4A] transition-all shadow-lg shadow-blue-900/10">
            Entrar
        </button>

        <div class="text-center pt-6 border-t border-slate-100">
            <p class="text-slate-400 text-[12px] font-bold uppercase">
                Não possui uma conta? 
                <a href="{{ route('register') }}" class="text-[#102C70] ml-1 underline hover:no-underline transition-all">crie aqui</a>
            </p>
        </div>
    </form>
</x-guest-layout>
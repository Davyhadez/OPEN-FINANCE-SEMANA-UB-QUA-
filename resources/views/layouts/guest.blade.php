<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Open Finance - Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-slate-100">
        <div class="min-h-screen flex flex-col justify-center items-center p-6">
            
            <div class="w-full sm:max-w-[600px] bg-white border border-slate-200 shadow-sm p-12 rounded-none">
                {{ $slot }}
            </div>

            <p class="mt-8 text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em]">
                &copy; 2026 rupee System - semana ubíqua
            </p>
        </div>
    </body>
</html>
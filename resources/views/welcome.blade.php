<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <h2 class="font-semibold text-center my-2 text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Sistema de Pedidos Especiales
        </h2>
        <p class="font-semibold text-center text-base my-2 text-gray-800 dark:text-gray-200 leading-tight">
         Gestione sus pedidos de manera rápida y eficiente.
        </p>
        
        <div class="content-center text-center my-10">
        <x-primary-button class="ms-3">
            <a href="/login">Iniciar sesión</a>
        </x-primary-button>
        <x-primary-button class="ms-3">
            <a href="https://www.youtube.com/watch?v=tu-video-tutorial" target="_blank">Ver tutorial</a>
        </x-primary-button>
    </div>
</x-guest-layout>






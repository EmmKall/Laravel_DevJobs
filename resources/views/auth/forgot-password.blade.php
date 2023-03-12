<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu password?, No hay problema, Solo enviaremos un correo a tu cuenta para resetear tu contraseña por una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            @if (Route::has('password.request'))
                <x-link :href="route('register')">
                    Crear cuenta
                </x-link>
                <x-link :href="route('login')">
                    Ingresar
                </x-link>
            @endif
        </div>

        <div class="flex items-center justify-center">
            <x-primary-button class="w-full justify-center">
                {{ __('Enviar instrucciones') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

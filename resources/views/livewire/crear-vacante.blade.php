<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    @csrf
    <!-- Titulo Vacante -->
    <div class="">
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" placeholder="Titulo vacante" />
        @error( 'titulo' )
            <p class="text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        <x-input-label for="salario" :value="__('Salario vacante')" />
        <select id="salario" wire:model="salario" class="block bg-gray-900 text-white mt-1 w-full" :value="old('salario')">
            <option value="" selected disabled>--Seleccione una opción--</option>
            @foreach ( $salarios as $salario )
            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error( 'salario' )
            <p  class="text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        <x-input-label for="categoria" :value="__('Categoria vacante')" />
        <select id="categoria" wire:model="categoria" class="block bg-gray-900 text-white mt-1 w-full" :value="old('categoria')">
            <option value="" selected disabled>--Seleccione una opción--</option>
            @foreach ( $categorias as $categoria )
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error( 'categoria' )
            <p  class="text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        <x-input-label for="empresa" :value="__('Empresa vacante')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Empresa: facebook, google, linked" />
        @error( 'empresa' )
            <p  class="text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        <x-input-label for="ultimo_dia" :value="__('Último día')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" />
        @error( 'ultimo_dia' )
            <p  class="text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea id="descripcion" class="block h-72 mt-1 w-full bg-gray-900 text-white" type="date" wire:model="descripcion" :value="old('descripcion')" ></textarea>
        @error( 'descripcion' )
            <p  class="text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" />
        @error( 'imagen' )
            <p  class="text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div class="w-full flex justify-center">
        <x-primary-button class="w-full md:w-1/2 justify-center">
            {{ __('Crear vacante') }}
        </x-primary-button>
    </div>
</form>

<div class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando datos de la docente
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Actualiza los datos de la Docente
                </x-slot>

                <x-slot name="form">
                    <!-- Nombre -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="nombre" value="Nombre" />
                        <x-jet-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="docente.nombre"/>
                        <x-jet-input-error for="docente.nombre" class="mt-2" />
                    </div>

                    <!--estado -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="estado" value="Estado" />
                        <x-jet-input id="estado" type="text" class="mt-1 block w-full" wire:model.defer="docente.estado"/>
                        <x-jet-input-error for="docente.estado" class="mt-2" />
                    </div>

                </x-slot>

                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        Datos actualizados
                    </x-jet-action-message>

                    <x-jet-button wire:loading.attr="disabled">
                        Guardar
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>

</div>
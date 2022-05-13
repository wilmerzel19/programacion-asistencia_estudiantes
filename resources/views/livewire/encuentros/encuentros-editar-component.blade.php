<div class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando datos de la Encuentros
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Actualiza los datos de la Encuentros
                </x-slot>

                <x-slot name="form">
                    <!-- fecha-->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="fecha" value="Fecha" />
                        <x-jet-input id="fecha" type="text" class="mt-1 block w-full" wire:model.defer="encuentros.fecha"/>
                        <x-jet-input-error for="encuentros.fecha" class="mt-2" />
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
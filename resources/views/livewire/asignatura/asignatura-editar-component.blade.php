<div class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando datos de la Asignartura
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Actualiza los datos de la Asignatura
                </x-slot>

                <x-slot name="form">
                    <!-- Nombre -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="nombre" value="Nombre" />
                        <x-jet-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="asignatura.nombre"/>
                        <x-jet-input-error for="asignatura.nombre" class="mt-2" />
                    </div>

                    <!--docente_id -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="docente_id" value="Docente_id" />
                        <x-jet-input id="docente_id" type="text" class="mt-1 block w-full" wire:model.defer="asignatura.docente_id"/>
                        <x-jet-input-error for="asignatura.docente_id" class="mt-2" />
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
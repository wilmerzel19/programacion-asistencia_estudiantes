<div class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando datos de la Asistencia
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Actualiza los datos de la Asistencia
                </x-slot>

                <x-slot name="form">
                    <!-- Hora -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="hora" value="Hora" />
                        <x-jet-input id="hora" type="text" class="mt-1 block w-full" wire:model.defer="asistencia.hora"/>
                        <x-jet-input-error for="asistencia.hora" class="mt-2" />
                    </div>

                    <!-- Estado -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="estado" value="Estado" />
                        <x-jet-input id="estado" type="text" class="mt-1 block w-full" wire:model.defer="asistencia.estado"/>
                        <x-jet-input-error for="asistencia.estado" class="mt-2" />
                    </div>

                    <!-- estudiante_id -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="estudiante_id" value="Estudiante_id" />
                        <x-jet-input id="estudiante_id" type="text" class="mt-1 block w-full" wire:model.defer="asistencia.estudiante_id"/>
                        <x-jet-input-error for="asistencia.estudiante_id" class="mt-2" />
                    </div>

                    <!-- asignatura_id -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="asignatura_id" value="Asignatura_id" />
                        <x-jet-input id="asignatura_id" type="asignatura_id" class="mt-1 block w-full" wire:model.defer="asistencia.asignatura_id"/>
                        <x-jet-input-error for="asistencia.asignatura_id" class="mt-2" />
                    </div>

                     <!-- fecha_id -->
                     <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="fecha_id" value="Fecha_id" />
                        <x-jet-input id="fecha_id" type="fecha_id" class="mt-1 block w-full" wire:model.defer="asistencia.fecha_id"/>
                        <x-jet-input-error for="asistencia.fecha_id" class="mt-2" />
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
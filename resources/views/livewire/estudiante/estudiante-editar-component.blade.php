<div class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando datos de los Estudiantes
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Actualiza los datos de los Estudiantes
                </x-slot>

                <x-slot name="form">
                    <!-- Nombre -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="nombre" value="Nombre" />
                        <x-jet-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="estudiante.nombre"/>
                        <x-jet-input-error for="estudiante.nombre" class="mt-2" />
                    </div>

                    <!--Edad -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="edad" value="Edad" />
                        <x-jet-input id="edad" type="text" class="mt-1 block w-full" wire:model.defer="estudiante.edad"/>
                        <x-jet-input-error for="estudiante.edad" class="mt-2" />
                    </div>

                    <!-- TelÃ©fono -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="telefono" value="TelÃ©fono" />
                        <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="estudiante.telefono"/>
                        <x-jet-input-error for="estudiante.telefono" class="mt-2" />
                    </div>

                    <!-- Direccion -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="direccion" value="Direccion" />
                        <x-jet-input id="direccion" type="direccion" class="mt-1 block w-full" wire:model.defer="estudiante.direccion"/>
                        <x-jet-input-error for="estudiante.direccion" class="mt-2" />
                    </div>

                      <!-- Sexo -->
                      <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="sexo" value="Sexo" />
                        <x-jet-input id="sexo" type="sexo" class="mt-1 block w-full" wire:model.defer="estudiante.sexo"/>
                        <x-jet-input-error for="estudiante.sexo" class="mt-2" />
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
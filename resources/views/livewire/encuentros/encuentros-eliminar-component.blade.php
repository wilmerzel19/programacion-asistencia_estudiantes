<div class="p-4">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Borrando una Encuentros
        </h2>
    </x-slot>
    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-jet-form-section submit="eliminar({{request()->id}})">
                <x-slot name="title">
                    Confirme
                </x-slot>

                <x-slot name="description">
                    Confirme o cancela el borrado de la Encuentros
                </x-slot>

                <x-slot name="form">
                    <x-jet-label class="col-span-6">
                        Fecha: {{$encuentros->fecha}}
                    </x-jet-label>

                   
                </x-slot>

                <x-slot name="actions">
                    <x-jet-button type="button" wire:click="cancelar">
                        Cancelar
                    </x-jet-button>
                    <x-jet-danger-button class="ml-4" type="submit" wire:loading.attr="disabled">
                        Eliminar
                    </x-jet-danger-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>

</div>
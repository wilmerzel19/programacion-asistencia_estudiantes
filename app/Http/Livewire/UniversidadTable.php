<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Universidad;

class UniversidadTable extends DataTableComponent
{
    protected $model = Universidad::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setPerPageAccepted([5,10,15,20,30,40,50,100,-1]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable()
                ->searchable(),
            Column::make("Direccion", "direccion")
                ->sortable()
                ->searchable(),
                Column::make("Email", "email")
                ->sortable()
                ->searchable(),
                Column::make("Telefono", "telefono")
                ->sortable()
                ->searchable(),

                column::make("Editar","id")
                ->view("tablas.botones.universidad.editar"),

                column::make("Eliminar","id")
                ->view("tablas.botones.universidad.eliminar"),
        ];
    }
}

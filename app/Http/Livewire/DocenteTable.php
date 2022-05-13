<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Docente;

class DocenteTable extends DataTableComponent
{
    protected $model = Docente::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable()
                ->searchable(),
            Column::make("Estado", "estado")
                ->sortable()
                ->searchable(),
                
                column::make("Editar","id")
                ->view("tabla2.botones.docente.editar"),

                
                column::make("Eliminar","id")
                ->view("tabla2.botones.docente.eliminar"),

                column::make("Crear","id")
                ->view("tabla2.botones.docente.crear"),


                
        ];
    }
}

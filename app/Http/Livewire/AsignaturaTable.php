<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asignatura;

class AsignaturaTable extends DataTableComponent
{
    protected $model = Asignatura::class;

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
            Column::make("Docente_id", "docente_id")
                ->sortable()
                ->searchable(),


                 
                column::make("Editar","id")
                ->view("tabla3.botones.asignatura.editar"),

                column::make("Eliminar","id")
                ->view("tabla3.botones.asignatura.eliminar"),

                column::make("Crear","id")
                ->view("tabla3.botones.asignatura.crear"),
        ];
    }
}

<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asistencia;

class AsistenciaTable extends DataTableComponent
{
    protected $model = Asistencia::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Hora", "hora")
                ->sortable()
                ->searchable(),
            Column::make("Estado", "estado")
                ->sortable()
                ->searchable(),
                Column::make("Estudiante_id", "estudiante_id")
                ->sortable()
                ->searchable(),
                Column::make("Asignatura_id", "asignatura_id")
                ->sortable()
                ->searchable(),
                Column::make("Fecha_id", "fecha_id")
                ->sortable()
                ->searchable(),

                
                column::make("Editar","id")
                ->view("tabla1.botones.asistencia.editar"),

                
                column::make("Eliminar","id")
                ->view("tabla1.botones.asistencia.eliminar"),

                column::make("Crear","id")
                ->view("tabla1.botones.asistencia.crear"),
        ];
    }
}

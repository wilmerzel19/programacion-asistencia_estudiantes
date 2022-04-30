<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Encuentros;

class EncuentrosTable extends DataTableComponent
{
    protected $model = Encuentros::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Fecha", "fecha")
                ->sortable()
                ->searchable(),

                column::make("Editar","id")
                ->view("tabla4.botones.encuentros.editar"),

                column::make("Eliminar","id")
                ->view("tabla4.botones.encuentros.eliminar"),
        ];
    }
}

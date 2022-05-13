<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Estudiante;

class EstudianteTable extends DataTableComponent
{
    protected $model = Estudiante::class;

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
                Column::make("Edad", "edad")
                ->sortable()
                ->searchable(),
                Column::make("Telefono", "telefono")
                ->sortable()
                ->searchable(),
                Column::make("Sexo", "sexo")
                ->sortable()
                ->searchable(),


                column::make("Editar","id")
                ->view("tabla.botones.estudiante.editar"),

                column::make("Eliminar","id")
                ->view("tabla.botones.estudiante.eliminar"),

                column::make("Crear","id")
                ->view("tabla.botones.estudiante.crear"),



        ];
    }
}

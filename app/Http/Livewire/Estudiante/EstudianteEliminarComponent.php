<?php

namespace App\Http\Livewire\Estudiante;
use App\Models\Estudiante;
use Livewire\Component;

class EstudianteEliminarComponent extends Component
{
    public function mount()
    {
        $this->estudiante= new Estudiante();
        if (isset(request()->id)) {
            $estudiante= request()->id;
            //Cargar la universidad que se va a actualizar
            $this->estudiante = Estudiante::findOrFail($estudiante);
        }
    }
    public function render()
    {
        return view('livewire.estudiante.estudiante-eliminar-component');
    }
    
    public function eliminar(Estudiante $estudiante)
    {
        //Eliminar la universidad
        $estudiante->delete();

        //Redireccionar a la lista de universidades
        return redirect(route('estudiante', ['show' => 1]));

    }

    public function cancelar()
    {
        //Redireccionar a la lista de universidades
        return redirect(route('estudiante', ['show' => 0]));

    }

}


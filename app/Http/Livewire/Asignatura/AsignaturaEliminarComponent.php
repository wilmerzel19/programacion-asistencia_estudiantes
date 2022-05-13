<?php

namespace App\Http\Livewire\Asignatura;
use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaEliminarComponent extends Component
{
    public function mount()
    {
        $this->asignatura= new Asignatura();
        if (isset(request()->id)) {
            $asignatura= request()->id;
            //Cargar la universidad que se va a actualizar
            $this->asignatura = Asignatura::findOrFail($asignatura);
        }
    }
    public function render()
    {
        return view('livewire.asignatura.asignatura-eliminar-component');
    }
    public function eliminar(Asignatura $asignatura)
    {
        //Eliminar la universidad
        $asignatura->delete();

        //Redireccionar a la lista de universidades
        return redirect(route('asignatura', ['show' => 1]));

    }

    public function cancelar()
    {
        //Redireccionar a la lista de universidades
        return redirect(route('asignatura', ['show' => 0]));

    }

}

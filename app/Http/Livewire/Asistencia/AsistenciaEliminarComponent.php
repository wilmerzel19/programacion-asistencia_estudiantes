<?php

namespace App\Http\Livewire\Asistencia;
use App\Models\Asistencia;
use Livewire\Component;

class AsistenciaEliminarComponent extends Component
{
    public function mount()
    {
        $this->asistencia= new Asistencia();
        if (isset(request()->id)) {
            $asistencia= request()->id;
            //Cargar la universidad que se va a actualizar
            $this->asistencia = Asistencia::findOrFail($asistencia);
        }
    }
    public function render()
    {
        return view('livewire.asistencia.asistencia-eliminar-component');
    }
    public function eliminar(Asistencia $asistencia)
    {
        //Eliminar la universidad
        $asistencia->delete();

        //Redireccionar a la lista de universidades
        return redirect(route('asistencia', ['show' => 1]));

    }

    public function cancelar()
    {
        //Redireccionar a la lista de universidades
        return redirect(route('asistencia', ['show' => 0]));

    }

}


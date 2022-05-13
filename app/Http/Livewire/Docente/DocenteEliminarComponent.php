<?php

namespace App\Http\Livewire\Docente;
use App\Models\Docente;
use Livewire\Component;

class DocenteEliminarComponent extends Component
{
    public function mount()
    {
        $this->docente= new Docente();
        if (isset(request()->id)) {
            $docente= request()->id;
            //Cargar la universidad que se va a actualizar
            $this->docente = Docente::findOrFail($docente);
        }
    }
    public function render()
    {
        return view('livewire.docente.docente-eliminar-component');
    }
    public function eliminar(Docente $docente)
    {
        //Eliminar la universidad
        $docente->delete();

        //Redireccionar a la lista de universidades
        return redirect(route('docente', ['show' => 1]));

    }

    public function cancelar()
    {
        //Redireccionar a la lista de universidades
        return redirect(route('docente', ['show' => 0]));

    }

}




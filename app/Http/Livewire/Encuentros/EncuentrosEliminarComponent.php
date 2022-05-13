<?php

namespace App\Http\Livewire\Encuentros;
use App\Models\Encuentros;
use Livewire\Component;

class EncuentrosEliminarComponent extends Component
{
    
    public function mount()
    {
        $this->encuentros= new Encuentros();
        if (isset(request()->id)) {
            $encuentros= request()->id;
            //Cargar la universidad que se va a actualizar
            $this->encuentros = Encuentros::findOrFail($encuentros);
        }
    }
    public function render()
    {
        return view('livewire.encuentros.encuentros-eliminar-component');
    }
      
    public function eliminar(Encuentros $encuentros)
    {
        //Eliminar la universidad
        $encuentros->delete();

        //Redireccionar a la lista de universidades
        return redirect(route('encuentros', ['show' => 1]));

    }

    public function cancelar()
    {
        //Redireccionar a la lista de universidades
        return redirect(route('encuentros', ['show' => 0]));

    }

}



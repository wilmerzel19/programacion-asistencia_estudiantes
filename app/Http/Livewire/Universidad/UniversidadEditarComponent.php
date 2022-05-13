<?php

namespace App\Http\Livewire\Universidad;
use App\Models\Universidad;
use Livewire\Component;

class UniversidadEditarComponent extends Component
{
public $universidad =null;
protected $rules =[
'universidad.nombre'=> 'required|min:3|max:100',
'universidad.direccion'=> 'required|min:3|max:100',
'universidad.telefono'=> 'required|min:3|max:20',
'universidad.email'=> 'required|email',

    
    ];
public function mount(){
    //detectar la universidad de la url

    $universidad=request()->id;

    //cargar la univer. qu se se va actualizar

    $this->universidad = Universidad::findOrFail($universidad);

}



    public function render()
    {
        return view('livewire.universidad.universidad-editar-component');
    }
    

    public function actualizar(){
        $id = $this->universidad->id ?? null;
        $this->validate();
        Universidad::updateOrCreate([
            'id' => $id,
        ], $this->universidad->toArray());

        $this->emit('saved');

    }
}



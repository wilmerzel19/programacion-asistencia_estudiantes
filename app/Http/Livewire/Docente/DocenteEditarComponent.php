<?php

namespace App\Http\Livewire\Docente;

use Livewire\Component;
use App\Models\Docente;
class DocenteEditarComponent extends Component
{
    public $estudiante =null;
    protected $rules =[
    'docente.nombre'=> 'required|min:3|max:100',
    'docente.estado'=> 'required|min:3|max:100',
   
        
        ];
        public function mount(){
            //detectar la universidad de la url
        
            $docente=request()->id;
        
            //cargar la univer. qu se se va actualizar
        
            $this->docente = Docente::findOrFail($docente);
        }
    public function render()
    {
        return view('livewire.docente.docente-editar-component');
    }
    public function actualizar(){
    $id = $this->docente->id ?? null;
    $this->validate();
    Docente::updateOrCreate([
        'id' => $id,
    ], $this->docente->toArray());

    $this->emit('saved');
}

}

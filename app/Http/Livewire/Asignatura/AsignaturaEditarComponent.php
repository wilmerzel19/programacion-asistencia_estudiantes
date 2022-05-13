<?php

namespace App\Http\Livewire\Asignatura;
use App\Models\Asignatura;
use Livewire\Component;

class AsignaturaEditarComponent extends Component
{
    public $asignatura =null;
    protected $rules =[
    'asignatura.nombre'=> 'required|min:3|max:100',
    'asignatura.docente_id'=> 'required|min:3|max:100',
   
        
        ];
        public function mount(){
            //detectar la universidad de la url
        
            $asignatura=request()->id;
        
            //cargar la univer. qu se se va actualizar
        
            $this->asignatura = Asignatura::findOrFail($asignatura);
        }
    public function render()
    {
        return view('livewire.asignatura.asignatura-editar-component');
    }
    public function actualizar(){
        $id = $this->Asignatura->id ?? null;
        $this->validate();
        Asignatura::updateOrCreate([
            'id' => $id,
        ], $this->asignatura->toArray());
    
        $this->emit('saved');
    }
}

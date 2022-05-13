<?php

namespace App\Http\Livewire\Encuentros;
use App\Models\Encuentros;
use Livewire\Component;

class EncuentrosEditarComponent extends Component
{
    public $asignatura =null;
    protected $rules =[
    'encuentros.fecha'=> 'required|min:1|max:100',
   
   
        
        ];
        public function mount(){
            //detectar la universidad de la url
        
            $encuentros=request()->id;
        
            //cargar la univer. qu se se va actualizar
        
            $this->encuentros = Encuentros::findOrFail($encuentros);
        }
    public function render()
    {
        return view('livewire.encuentros.encuentros-editar-component');
    }
    public function actualizar(){
        $id = $this->encuentros->id ?? null;
        $this->validate();
        Encuentros::updateOrCreate([
            'id' => $id,
        ], $this->encuentros->toArray());
    
        $this->emit('saved');
    }
}

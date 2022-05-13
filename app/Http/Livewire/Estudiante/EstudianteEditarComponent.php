<?php

namespace App\Http\Livewire\Estudiante;
use App\Models\Estudiante;
use Livewire\Component;

class EstudianteEditarComponent extends Component
{
   public $estudiante =null;
    protected $rules =[
    'estudiante.nombre'=> 'required|min:3|max:100',
    'estudiante.edad'=> 'required|min:3|max:100',
    'estudiante.telefono'=> 'required|min:3|max:20',
    'estudiante.direccion'=> 'required|min:3|max:100',
    'estudiante.sexo'=> 'required|min:3|max:100',
        
        ];
    public function mount(){
        //detectar laestudiante de la url
    
        $estudiante=request()->id;
    
        //cargar la univer. qu se se va actualizar
    
        $this->estudiante = Estudiante::findOrFail($estudiante);
    }
  public function render()
    
    {
        return view('livewire.estudiante.estudiante-editar-component');
    }
    public function actualizar(){
        $id = $this->estudiante->id ?? null;
        $this->validate();
        Estudiante::updateOrCreate([
            'id' => $id,
        ], $this->estudiante->toArray());

        $this->emit('saved');

}
}

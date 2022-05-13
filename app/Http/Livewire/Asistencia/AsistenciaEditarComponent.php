<?php

namespace App\Http\Livewire\Asistencia;

use Livewire\Component;
use App\Models\Asistencia;
class AsistenciaEditarComponent extends Component
{
    public $estudiante =null;
    protected $rules =[
    'asistencia.hora'=> 'required|min:3|max:100',
    'asistencia.estado'=> 'required|min:3|max:100',
    'asistencia.estudiante_id'=> 'required|min:3|max:20',
    'asistencia.asignatura_id'=> 'required|min:3|max:100',
    'asistencia.fecha_id'=> 'required|min:3|max:100',
        
        ];
        public function mount(){
            //detectar la universidad de la url
        
            $asistencia=request()->id;
        
            //cargar la univer. qu se se va actualizar
        
            $this->asistencia = Asistencia::findOrFail($asistencia);
        }
       
    public function render()
   
       {  
            return view('livewire.asistencia.asistencia-editar-component');
    }
    public function actualizar(){
        $id = $this->asistencia->id ?? null;
        $this->validate();
        Asistencia::updateOrCreate([
            'id' => $id,
        ], $this->asistencia->toArray());

        $this->emit('saved');

    }

}

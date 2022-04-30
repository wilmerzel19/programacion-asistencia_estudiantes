<?php

namespace App\Http\Livewire;

use App\Models\Universidad;
use Livewire\Component;

class Universidadcomponent extends Component
{
    public function render()
    {
        //traer los datos de la universidad
        //$universidades = universidad::all();
        return view('livewire.universidadcomponent');
       // 'universidades'=> $universidades
    
    }
}

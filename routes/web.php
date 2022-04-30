<?php
use App\Http\Livewire\Encuentros\EncuentrosEliminarComponent;
use App\Http\Livewire\Asignatura\AsignaturaEliminarComponent;
use App\Http\Livewire\Docente\DocenteEliminarComponent;
use App\Http\Livewire\Asistencia\AsistenciaEliminarComponent;
use App\Http\Livewire\Universidad\UniversidadEliminarComponent;
use App\Http\Livewire\Estudiante\EstudianteEliminarComponent;
use App\Http\Livewire\Encuentros\EncuentrosEditarComponent;
use App\Http\Livewire\Asignatura\AsignaturaEditarComponent;
use App\Http\Livewire\Docente\DocenteEditarComponent;
use App\Http\Livewire\Asistencia\AsistenciaEditarComponent;
use App\Http\Livewire\Estudiante\EstudianteEditarComponent;
use App\Http\Livewire\Universidad\UniversidadEditarComponent;
use App\Http\Livewire\EncuentroComponent;
use App\Http\Livewire\AsignaturaComponent;
use App\Http\Livewire\DocenteComponent;
use App\Http\Livewire\AsistenciaComponent;
use App\Http\Livewire\EstudianteComponent;
use App\Http\Livewire\UniversidadComponent;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //Pagina principal
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Ruta para acceder a la universidad
    Route::get('/universidad', UniversidadComponent::class)->name('universidad');
    Route::get('/estudiante', Estudiantecomponent::class)->name('estudiante');
    Route::get('/asistencia', AsistenciaComponent::class)->name('asistencia');
    Route::get('/docente', DocenteComponent::class)->name('docente');
    Route::get('/asignatura',AsignaturaComponent::class)->name('asignatura');
    Route::get('/encuentros',EncuentroComponent::class)->name('encuentros');


//ruta para editar la universidad
Route::get ('/universidad/{id}/editar',UniversidadEditarComponent::class)->name('universidad.editar');
Route::get ('/estudiante/{id}/editar',EstudianteEditarComponent::class)->name('estudiante.editar');
Route::get ('/asistencia/{id}/editar',AsistenciaEditarComponent::class)->name('asistencia.editar');
Route::get ('/docente/{id}/editar',DocenteEditarComponent::class)->name('docente.editar');
Route::get ('/asignatura/{id}/editar',AsignaturaEditarComponent::class)->name('asignatura.editar');
Route::get ('/encuentros/{id}/editar',EncuentrosEditarComponent::class)->name('encuentros.editar');



//ruta para eliminar la universidad
Route::get ('/estudiante/{id}/eliminar',EstudianteEliminarComponent::class)->name('estudiante.eliminar');
Route::get ('/universidad/{id}/eliminar',UniversidadEliminarComponent::class)->name('universidad.eliminar');
Route::get ('/asistencia/{id}/eliminar',AsistenciaEliminarComponent::class)->name('asistencia.eliminar');
Route::get ('/docente/{id}/eliminar',DocenteEliminarComponent::class)->name('docente.eliminar');
Route::get ('/asignatura/{id}/eliminar',AsignaturaEliminarComponent::class)->name('Asignatura.eliminar');
Route::get ('/encuentros/{id}/eliminar',EncuentrosEliminarComponent::class)->name('encuentros.eliminar');




});

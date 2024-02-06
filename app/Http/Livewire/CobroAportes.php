<?php

namespace App\Http\Livewire;

use App\Models\Aporte;
use App\Models\Aportemiembro;
use App\Models\Miembro;
use Livewire\Component;

class CobroAportes extends Component
{
    public $selid = "", $aportesgestion;

    public function updatedSelid()
    {
        dd($this->selid);
        $this->aportesgestion = Aporte::where("gestion", date('Y'))->get();
        $aportes = Aportemiembro::where('miembro_id', $this->selID)->get();
    }
    public function render()
    {
        $miembros = Miembro::all();
        return view('livewire.cobro-aportes', compact('miembros'))->extends('adminlte::page');
    }
}

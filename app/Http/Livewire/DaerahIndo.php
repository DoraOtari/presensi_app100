<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DaerahIndo extends Component
{

    public function provinsi()
    {
        $provinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json')->collect();
        return $provinsi;
    }

    public function render()
    {
        return view('livewire.daerah-indo',[
            'provinsi' => $this->provinsi(),
        ]);
    }
}

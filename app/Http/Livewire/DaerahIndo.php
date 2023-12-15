<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DaerahIndo extends Component
{
    public $provinsi_id;

    public function kota()
    {
        $kota = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/$this->provinsi_id.json")->collect();
        return $kota;
    }

    public function provinsi()
    {
        $provinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json')->collect();
        return $provinsi;
    }

    public function render()
    {
        return view('livewire.daerah-indo',[
            'provinsi' => $this->provinsi(),
            'kota' => $this->kota(),
        ]);
    }
}

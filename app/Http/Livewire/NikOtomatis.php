<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NikOtomatis extends Component
{
    public $user, $user_id, $tgl_lahir;

    public function buat_nik()
    {
      $nik = str_replace('-','',$this->tgl_lahir).$this->user_id;
      return $nik;
    }

    public function render()
    {
        return view('livewire.nik-otomatis', ['nik' => $this->buat_nik()]);
    }
}

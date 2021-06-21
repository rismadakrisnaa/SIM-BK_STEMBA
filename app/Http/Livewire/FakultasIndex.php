<?php

/**
 * Copyright Gosoftware Media 2021
 * --
 * Gosoftware Media
 * Site   : http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA     : 62852-6361-6901
 * --
 */

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fakultas;

class FakultasIndex extends Component
{
    public function render()
    {
        $sql = Fakultas::orderBy('fak_kode')->get();
        return view('livewire.fakultas-index', ['rows' => $sql]);
    }
}

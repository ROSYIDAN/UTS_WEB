<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class DeleteControlller extends Controller
{
    public function __invoke($id)
    {
        DB::delete('Menghaspus data',[$id]);

        return redirect()->route('portofolios.index')->with('success','Data berhasil dihapus');
        // ...
    }
}

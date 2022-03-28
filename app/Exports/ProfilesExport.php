<?php

namespace App\Exports;

use App\Models\Profiles;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProfilesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Profiles::all();
    }
}

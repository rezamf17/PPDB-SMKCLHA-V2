<?php

namespace App\Exports;

use App\Form;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataSiswa implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Form::all();
    }
}

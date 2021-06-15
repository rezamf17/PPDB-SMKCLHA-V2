<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    protected $table = 'data_siswa';

    public function formulir()
    {
    	return $this->belongsTo(data_siswa::class);
    }
}

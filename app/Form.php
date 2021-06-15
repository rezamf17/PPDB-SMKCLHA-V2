<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	 // protected $fillable = ['name'];
	 protected $guarded = [];

    public function data_siswa()
    {
    	// return $this->belongsTo(Form::class, 'id_data_siswa', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
	protected $guarded = ['files'];
    protected $table = 'pengumuman';
}

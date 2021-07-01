<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //    public function user()
    // {
    //     return $this->hasOne(User::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
     protected $table = 'files';
     protected $guarded = [];

}

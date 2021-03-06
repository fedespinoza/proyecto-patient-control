<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function worksocial(){
        return $this->belongsTo('App\Models\WorkSocial', 'obra_id');
    }
}



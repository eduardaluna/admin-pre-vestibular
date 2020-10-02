<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

    use HasFactory;

    public function turmas(){
        return $this->belongsToMany('App\Models\Turma');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
 
    protected $fillable = [
        'name_dp',
        'description',
        'email_institucional',
        'telefone',
    ];
    public function flies()
    {
        return $this->hasMany(Fly::class);
    }
}
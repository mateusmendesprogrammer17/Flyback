<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $fillable = [
        
        'content',
        'fly_id',
    ];

    public function fly()
    {
        return $this->belongsTo(Fly::class);
    }
}
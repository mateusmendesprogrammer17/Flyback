<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'category',
        'status',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

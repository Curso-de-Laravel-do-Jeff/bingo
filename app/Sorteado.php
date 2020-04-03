<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteado extends Model
{
    protected $table = 'sorteados';
    protected $fillable = [
        'numero'
    ];

    public $timestamps = false;
}

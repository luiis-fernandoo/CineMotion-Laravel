<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id',
        'date',
        'time',
        'room',
        'num_session',
        'price',
    ];

}

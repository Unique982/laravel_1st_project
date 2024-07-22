<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Look extends Model
{
    use HasFactory;
    protected $table = 'lookups';
    protected $fillable = [
        'name',
        'name',
        'code',
        'type',
        'position',

    ];
}

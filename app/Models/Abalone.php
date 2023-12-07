<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abalone extends Model
{
    use HasFactory;

    // Allow insert data into database
    protected $fillable = [
        'sex',
        'length',
        'diameter',
        'height',
        'whole_weight',
        'shucked_weight',
        'viscera_weight',
        'shell_weight',
        'rings',
    ];
}

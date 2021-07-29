<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waste extends Model
{
    use HasFactory;

    protected $fillable = [
                 
        'name',
        'jan',
        'feb',
        'mar',
        'aprl',
        'may',
        'june',
        'july',
        'aug',
        'sep',
        'oct',
        'nov',
        'dec',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sustainability extends Model
{
    use HasFactory;


    protected $fillable = [
                 
        'mainName',
        'subName',
        'year', 
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

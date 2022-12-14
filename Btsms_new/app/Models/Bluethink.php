<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bluethink extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id', 
        'name', 
        'technology',
        'email',
        'mobile'
    ];
}

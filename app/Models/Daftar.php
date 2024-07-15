<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

     /**
     * fillable
     * 
     *  @var array
     */
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'address',
        'nominal'
    ];
}

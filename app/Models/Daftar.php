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
<<<<<<< HEAD
        'alamat',
        'jumlah'
        
=======
        'address',
        'nominal'
>>>>>>> dbfc43fc96157831bd47325129e5fba761974321
    ];
}

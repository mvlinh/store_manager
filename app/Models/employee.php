<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';


    protected $quarded = [];
    public $timestames = true;

    protected $fillable = [
        'id', 
        'name',
        'position_id',
        'phone',
        'DoB',
        'address',
        'email',
        'password',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    protected $table = 'product';
    protected $quarded = [];
    public $timestames = true;

    protected $fillable = [
        'id', 
        'name',
        'price',
        'commission',
        'created_at'
    ];
}

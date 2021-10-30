<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follow extends Model
{
    use HasFactory;
    protected $table = 'follow';


    protected $quarded = [];
    public $timestames = false;

    protected $fillable = [
        'emp_id', 
        'customer_id',
        'care_info',
    ];
}

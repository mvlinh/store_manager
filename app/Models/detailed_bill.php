<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailed_bill extends Model
{
    use HasFactory;
    protected $table = 'detailed_bill';


    protected $quarded = [];
    public $timestames = true;

    protected $fillable = [
        'bill_id', 
        'product_id',
        'quantity',
    ];
}

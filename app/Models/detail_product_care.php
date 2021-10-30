<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_product_care extends Model
{
    use HasFactory;
    protected $table = 'detailed_product_care';


    protected $quarded = [];
    public $timestames = false;

    protected $fillable = [
        'customer_id', 
        'product_id',
    ];
}

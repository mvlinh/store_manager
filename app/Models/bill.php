<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $fillable = [
        'id', 
        'emp_care_id',
        'emp_seller_id',
        'customer_id',
        'created_at'
    ];
   
}

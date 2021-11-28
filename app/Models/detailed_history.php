<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailed_history extends Model
{
    use HasFactory;
    protected $table = 'detailed_history';


    protected $quarded = [];
    public $timestames = true;

    protected $fillable = [
        'emp_send_id', 
        'emp_receive',
        'customer_id',
        'status',
        'created_at',
        'updated_at',
    ];
}

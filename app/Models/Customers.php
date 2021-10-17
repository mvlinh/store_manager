<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customer';


    protected $quarded = [];
    public $timestames = false;

    protected $fillable = [
        'name', 
        'employees_id',
        'phone',
        'address',
        'email',
        'status',
    ];

    // protected $primaryKey = 'id_employee';

    // public function user(){
    //     return $this->belongsTo('App\Models\User', 'id_employee','id');
    // }
    
}

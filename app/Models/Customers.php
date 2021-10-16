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
        'email',
        'phone',
        'address',
        'status',
        'id_employee',
    ];

    // protected $primaryKey = 'id_employee';

    // public function user(){
    //     return $this->belongsTo('App\Models\User', 'id_employee','id');
    // }
    
}

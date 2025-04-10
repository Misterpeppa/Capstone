<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invmanagement extends Model
{
    use HasFactory;
    protected $table = 'inv_management';

    protected $fillable =[
        'item_name',
        'quantity',
        'price',
        'exp_date',
        'product_type'
    ];
    
}

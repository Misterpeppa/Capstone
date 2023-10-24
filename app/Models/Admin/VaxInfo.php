<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxInfo extends Model
{
    use HasFactory;
    protected $table = 'vax_info';

    protected $fillable = [
        'item_name',
        'quantity',
        'effects',
        'price',
        'expiration_date',
        'batch_no',
        'manufacturing_date',
        'date_stocked',
        'product_type',
        'product_code'
    ];
}

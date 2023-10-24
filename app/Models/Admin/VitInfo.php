<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitInfo extends Model
{
    use HasFactory;
    protected $table = 'vit_info';

    protected $fillable = [
        'item_name',
        'quantity',
        'price',
        'batch_no',
        'expiration_date',
        'batch_no',
        'manufacturing_date',
        'date_stocked',
        'product_type',
        'product_code'
    ];
}

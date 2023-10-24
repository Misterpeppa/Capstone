<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedInfo extends Model
{
    use HasFactory;
    protected $table = 'med_info';

    protected $fillable = [
        'item_name',
        'quantity',
        'uses',
        'side_effects',
        'price',
        'expiration_date',
        'batch_no',
        'manufacturing_date',
        'date_stocked',
        'product_type',
        'product_code'
    ];
}

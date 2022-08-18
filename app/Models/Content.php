<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'amazon_link',
        'ebay_link',
        'product_link',
        'image_one',
        'placement',
        'image_two',
    ];
}

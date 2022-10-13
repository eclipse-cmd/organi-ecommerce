<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'stock',
        'sku',
        'description',
        'category',
        'sales_price',
        'regular_price',
        'description',
    ];

    protected $cast = [
        'category' => 'array',
    ];
}

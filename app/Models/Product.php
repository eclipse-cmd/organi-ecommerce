<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'stock',
        'sku',
        'description',
        'image_path',
        'category',
        'sales_price',
        'regular_price',
        'description',
    ];

    protected $cast = [
        'category' => 'array',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // protected $guarded = [

    // ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'brand',
        'title',
        'rating',
        'reviews',
        'sellPrice',
        'orders',
        'mrp',
        'discount',
        'category',
    ];

    public function toArray(): array
    {
        return array_merge(parent::toArray(), ['_id' => $this->id]);
    }
}

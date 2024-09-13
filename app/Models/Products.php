<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'price', 'description','image','type_id'];
    protected $table = "products";
    public function typeofproducts():BelongsTo
    {
        return $this->belongsTo(TypesOfProducts::class, 'type_id');
    }
}

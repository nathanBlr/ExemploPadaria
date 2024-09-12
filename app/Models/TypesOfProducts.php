<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypesOfProducts extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'description'];
    protected $table = "types_of_products";

    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'type_id');
    }
}

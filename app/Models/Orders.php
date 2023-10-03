<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tb_draft_orders';
    protected $fillable = ['id', 'product_id', 'user_id'];

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}

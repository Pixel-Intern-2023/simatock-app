<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_out_product';
    protected $guarded = 'id';

    public function product()
    {
        return $this->belongsTo(Products::class, 'products_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

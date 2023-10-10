<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_suplier';
    protected $guarded = ['id'];
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}

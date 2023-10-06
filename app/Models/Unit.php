<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_unit';
    protected $fillable = ['id', 'unit'];
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}

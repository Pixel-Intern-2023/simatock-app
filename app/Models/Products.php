<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'tb_products';
    protected $guarded = ['id'];
    public $incrementing = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function suplier()
    {
        return $this->belongsTo(Suplier::class, 'suplier_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

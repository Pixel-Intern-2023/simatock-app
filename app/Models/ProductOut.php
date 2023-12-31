<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public static function mostSoldProduct()
    {
        return static::select('tb_products.id', 'tb_products.products_name', DB::raw('SUM(tb_out_product.amount_out) as total_keluar'))
            ->join('tb_products', 'tb_out_product.products_id', '=', 'tb_products.id')
            ->groupBy('tb_products.id', 'tb_products.products_name')
            ->havingRaw('SUM(tb_out_product.amount_out) > 0')
            ->orderBy('total_keluar', 'DESC')
            ->take(5)
            ->get();
    }
    public static function chart()
    {
        return static::select('tb_products.products_name as name', DB::raw('CAST(SUM(tb_out_product.amount_out) AS INTEGER) as y'))
            ->join('tb_products', 'tb_out_product.products_id', '=', 'tb_products.id')
            ->groupBy('tb_products.id', 'tb_products.products_name')
            ->havingRaw('SUM(tb_out_product.amount_out) > 0')
            ->orderBy('y', 'DESC')
            ->take(10)
            ->get();
    }
}

<?php

namespace App\Exports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Products::with(['category', 'unit', 'suplier'])
            ->select('products_name', 'quantity', 'category_id', 'unit_id', 'suplier_id', 'created_at')
            ->get();
    }

    /**
     * @var mixed $product
     */
    public function map($product): array
    {
        return [
            $product->products_name,
            $product->category->category,  // Assuming category name is the field you want to display
            $product->quantity,  // Assuming category name is the field you want to display
            $product->unit->unit,      // Assuming unit name is the field you want to display
            $product->suplier->suplier,   // Assuming supplier name is the field you want to display
            $product->created_at
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama Barang',
            'Kategori',
            'Stok',
            'Satuan',
            'Suplier',
            'Tanggal barang masuk'
        ];
    }
}

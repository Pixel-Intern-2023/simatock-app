<?php

namespace App\Exports;

use App\Models\ProductOut;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductOutExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ProductOut::select('products_id', 'amount_out', 'picker', 'total', 'user_id', 'created_at')->get();
    }

    /**
     * @var mixed $productOut
     */
    public function map($productOut): array
    {
        $unit = optional($productOut->product->unit)->unit ?? 'Satuan tidak tersedia';
        return [
            $productOut->product->products_name,
            $productOut->amount_out,
            $unit,
            $productOut->total,
            $productOut->picker,
            $productOut->users->name,
            $productOut->created_at,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama Barang',
            'Jumlah Keluar',
            'Satuan',
            'Total',
            'Picker',
            'Admin',
            'Tanggal barang Keluar'
        ];
    }
}

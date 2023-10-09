<?php

namespace App\Http\Controllers\Services;

use App\Exports\UsersExport;
use App\Models\Unit;
use App\Models\Suplier;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

// Main data controller
class DataController extends Controller
{
    // Product method
    public function list_product()
    {
        $products = Products::with(['category', 'unit', 'suplier'])->get();
        return view('Services.Products.products-list', compact('products'));
    }
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(
                [
                    'productName' => 'required',
                    'receivingDate' => 'required',
                    'quantity' => 'required|min:0',
                    'unit' => 'required',
                    'category' => 'required',
                    'purchPrice' => 'required',
                    'custPrice' => 'required',
                    'suplier' => 'required',
                ],
                [
                    'productName.required' => 'Kolom Nama barang harus diisi.',
                    'receivingDate.required' => 'Kolom Tanggal barang masuk harus diisi.',
                    'quantity.required' => 'Kolom Stok barang harus diisi.',
                    'unit.required' => 'Kolom Satuan barang harus diisi.',
                    'quantity.min' => 'Kolom Stok barang harus diatas 0.',
                    'category.required' => 'Kolom Kategori barang harus diisi.',
                    'purchPrice.required' => 'Kolom Harga beli barang harus diisi.',
                    'custPrice.required' => 'Kolom harga jual barang harus diisi.',
                    'suplier.required' => 'Kolom suplier harus diisi',
                ],
            );
            $purch_price = str_replace(',', '', $request->purchPrice);
            $cust_price = str_replace(',', '', $request->custPrice);
            Products::create([
                'id' => Str::uuid(),
                'products_name' => $request->productName,
                'quantity' => $request->quantity,
                'unit_id' => $request->unit,
                'category_id' => $request->category,
                'purch_price' => $purch_price,
                'cust_price' => $cust_price,
                'receiving_date' => $request->receivingDate,
                'suplier_id' => $request->suplier,
                'user_id' => $request->user()->id,
            ]);
            session()->flash('successAdded', 'Produk Berhasil Ditambahkan!');
            return to_route('list-barang');
        }
    }
    public function form_tambah()
    {
        $context = [
            'unit' => Unit::all(),
            'category' => Category::all(),
            'suplier' => Suplier::all(),
        ];
        return view('Services.Products.form-add', $context);
    }
    public function form_edit(Request $request, $id)
    {
        $context = [
            'unit' => Unit::orderByDesc('created_at')->get(),
            'category' => Category::all(),
            'suplier' => Suplier::all(),
            'product' => Products::find($id),
        ];
        if ($request->isMethod('GET')) {
            return view('Services.Products.detail-product', $context);
        } elseif ($request->isMethod('PUT')) {
            $request->validate(
                [
                    'productName' => 'required',
                    'receivingDate' => 'required',
                    'quantity' => 'required|min:' . $context['product']['quantity'],
                    'unit' => 'required',
                    'category' => 'required',
                    'purchPrice' => 'required',
                    'custPrice' => 'required',
                    'suplier' => 'required',
                ],
                [
                    'productName.required' => 'Kolom Nama barang harus diisi.',
                    'receivingDate.required' => 'Kolom Tanggal barang masuk harus diisi.',
                    'quantity.required' => 'Kolom Stok barang harus diisi.',
                    'unit.required' => 'Kolom Satuan barang harus diisi.',
                    'quantity.min' => 'Stok barang tidak boleh kurang dari ' . $context['product']['quantity'],
                    'category.required' => 'Kolom Kategori barang harus diisi.',
                    'purchPrice.required' => 'Kolom Harga beli barang harus diisi.',
                    'custPrice.required' => 'Kolom harga jual barang harus diisi.',
                    'suplier.required' => 'Kolom suplier harus diisi',
                ],
            );
            $data = Products::where('id', $id)->update([
                'products_name' => $request->productName,
                'quantity' => $request->quantity,
                'unit_id' => $request->unit,
                'user_id' => $request->user()->id,
                'category_id' => $request->category,
                'purch_price' => $request->purchPrice,
                'cust_price' => $request->custPrice,
                'receiving_date' => $request->receivingDate,
                'suplier_id' => $request->suplier,
            ]);

            return to_route('list-barang');
        }
    }
    public function removeProduct($id)
    {
        Products::find($id)->delete();
        return to_route('list-barang');
    }
    // download
    public function export()
    {
        return Excel::download(new UsersExport(), 'products.xlsx');
    }
}

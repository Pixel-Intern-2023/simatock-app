<?php

namespace App\Http\Controllers\Services;

use App\Exports\ProductsExport;
use App\Models\Unit;
use App\Models\Suplier;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
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
            $request->merge([
                'custPrice' => str_replace(',', '', $request->input('custPrice')),
                'purchPrice' => str_replace(',', '', $request->input('purchPrice')),
            ]);
            $request->validate(
                [
                    'productName' => 'required',
                    'quantity' => 'required|gt:0',
                    'unit' => 'required',
                    'category' => 'required',
                    'purchPrice' => 'required|gt:0',
                    'custPrice' => 'required|gt:' . $request->purchPrice,
                    'suplier' => 'required',
                ],
                [
                    'productName.required' => 'Kolom Nama barang harus diisi.',
                    'quantity.required' => 'Kolom Stok barang harus diisi.',
                    'unit.required' => 'Kolom Satuan barang harus diisi.',
                    'quantity.gt' => 'Kolom Stok barang harus diatas 0.',
                    'category.required' => 'Kolom Kategori barang harus diisi.',
                    'purchPrice.required' => 'Kolom Harga beli barang harus diisi.',
                    'purchPrice.gt' => 'Kolom Harga beli harus lebih dari 0',
                    'custPrice.required' => 'Kolom harga jual barang harus diisi.',
                    'custPrice.gt' => 'Harga beli harus lebih dari harga jual',
                    'suplier.required' => 'Kolom suplier harus diisi',
                ],
            );

            Products::create([
                'id' => Str::uuid(),
                'products_name' => $request->productName,
                'quantity' => $request->quantity,
                'unit_id' => $request->unit,
                'category_id' => $request->category,
                'purch_price' => $request->purchPrice,
                'cust_price' => $request->custPrice,
                'suplier_id' => $request->suplier,
                'user_id' => $request->user()->id,
            ]);
            session()->flash('success', 'Produk Berhasil Ditambahkan!');
            return redirect()->route('List Barang');
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
                    'quantity' => 'required|gte:' . $context['product']['quantity'],
                    'unit' => 'required',
                    'category' => 'required',
                    'purchPrice' => 'required|gt:0',
                    'custPrice' => 'required|gt:' . $request->purchPrice,
                    'suplier' => 'required',
                ],
                [
                    'productName.required' => 'Kolom Nama barang harus diisi.',
                    'unit.required' => 'Kolom Satuan barang harus diisi.',
                    'quantity.gte' => 'Stok barang tidak boleh kurang dari ' . $context['product']['quantity'],
                    'category.required' => 'Kolom Kategori barang harus diisi.',
                    'purchPrice.required' => 'Kolom Harga beli barang harus diisi.',
                    'custPrice.required' => 'Kolom harga jual barang harus diisi.',
                    'custPrice.gt' => 'Kolom harga jual harus melebihi harga beli',
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
                'suplier_id' => $request->suplier,
            ]);
            session()->flash('success', 'Data Berhasil diedit');

            return to_route('List Barang');
        }
    }
    public function removeProduct($id)
    {
        $product = Products::findOrFail($id);
        $product->productOut()->delete();
        $product->delete();
        session()->flash('success', 'Data Berhasil Dihapus!');
        return to_route('List Barang');
    }
    // download
    public function exportProductIn()
    {
        return Excel::download(new ProductsExport(), 'products.xlsx');
    }
    // SUPLIER METHOD
    public function list_suplier()
    {
        $suplier = Suplier::all();
        return view('Services.Products.list-suplier', compact('suplier'));
    }
    public function addSuplier(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('Services.Products.form-add-suplier');
        } elseif ($request->isMethod('POST')) {
            $request->validate(
                [
                    'suplierName' => 'required',
                    'noTelp' => 'required|min:10|max:13|regex:/^[0-9]{11,13}$/',
                    'address' => 'required'
                ],
                [
                    'suplierName.required' => 'Nama mitra suplier harus diisi!',
                    'noTelp.required' => 'No Telp Wajib Diisi!',
                    'noTelp.max' => 'No Telp Tidak Boleh melebihi 13 Karakter',
                    'noTelp.min' => 'No Telp Tidak boleh Kurang dari 10 Karakter',
                    'address.required' => 'Alamat Wajib Diisi!'
                ]
            );
            Suplier::create([
                'id' => Str::uuid(),
                'suplier' => $request->suplierName,
                'phone_number' => $request->noTelp,
                'address' => $request->address
            ]);
            session()->flash('success', 'Data Suplier Berhasil Di Tambahkakn');
            return to_route('List Suplier');
        }
    }
    public function editSuplier(Request $request, $id)
    {
        if ($request->isMethod('GET')) {
            $context = [
                'productBySuplier' => Products::with(['unit'])->where('suplier_id', $id)->select('id', 'products_name', 'quantity', 'purch_price', 'created_at', 'unit_id')->get(),
                'suplier' => Suplier::find($id),
            ];
            return view('Services.Products.detail-suplier', $context);
        } elseif ($request->isMethod('PUT')) {
            $request->validate(
                [
                    'suplierName' => 'required',
                    'noTelp' => 'required|min:10|max:13|regex:/^[0-9]{11,13}$/',
                    'address' => 'required'
                ],
                [
                    'suplierName.required' => 'Nama mitra suplier harus diisi!',
                    'noTelp.required' => 'No Telp Wajib Diisi!',
                    'noTelp.max' => 'No Telp Tidak Boleh melebihi 13 Karakter',
                    'noTelp.min' => 'No Telp Tidak Kurang dari 10 Karakter',
                    'address.required' => 'Alamat Wajib Diisi!'
                ]
            );
            Suplier::where('id', $id)->update([
                'suplier' => $request->suplierName,
                'phone_number' => $request->noTelp,
                'address' => $request->address
            ]);
            session()->flash('success', 'Data Suplier Berhasil Di Edit');
            return to_route('List Suplier');
        }
    }
    public function removeSuplier($id)
    {
        $suplier = Suplier::findOrFail($id);
        $products = $suplier->products;
        // dd($products);
        foreach ($products as $product) {
            $product->suplier_id = null;
            $product->save();
        }
        $suplier->delete();
        session()->flash('successUnit', 'Data Satuan Berhasil dihapus');
        return to_route('List Suplier');
    }
    // product recently added
    public function recentlyAdded()
    {
        $products = Products::with(['suplier', 'unit', 'user'])
            ->select('id', 'products_name', 'unit_id', 'suplier_id', 'user_id', 'quantity', 'purch_price', 'created_at')
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('Services.Products.productIn', compact('products'));
    }
}

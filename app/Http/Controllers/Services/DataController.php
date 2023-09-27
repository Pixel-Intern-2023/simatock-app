<?php

namespace App\Http\Controllers\Services;


use App\Models\Products;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Suplier;
use App\Models\Unit;

// Main data controller
class DataController extends Controller
{
    // Product method
    public function list_product()
    {
        $products = Products::with(['category', 'unit', 'suplier'])->get();
        return view('Services.Products.products-list', compact('products'));
    }
    public function store(StoreProductRequest $request)
    {
        if ($request->isMethod('POST')) {
            // dd($cust_price);
            $request->validated();
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
                'suplier_id' => $request->suplier
            ]);
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
    public function form_edit($id)
    {
        $context = [
            'unit' => Unit::all(),
            'category' => Category::all(),
            'suplier' => Suplier::all(),
            'product' => Products::find($id),
        ];
        return view('Services.Products.detail-product', $context);
    }
    public function edit(StoreProductRequest $request, $id)
    {
        if ($request->isMethod('PUT')) {
            $request->validated();
            $data = Products::where('id', $id)->update([
                'products_name' => $request->productName,
                'quantity' => $request->quantity,
                'unit_id' => $request->unit,
                'category_id' => $request->category,
                'purch_price' => $request->purchPrice,
                'cust_price' => $request->custPrice,
                'receiving_date' => $request->receivingDate,
                'suplier_id' => $request->suplier
            ]);

            return to_route('list-barang');
        }
    }
    public function destroy($id)
    {
        Products::find($id)->delete();
        return to_route('list-barang');
    }
    // Additional data method
    public function additional_data()
    {
        $context = [
            'unit' => Unit::all(),
            'category' => Category::all(),
            'suplier' => Suplier::all(),
        ];
        return view('Services.Data-utils.list-data-utils', $context);
    }
    // issuing product method
    public function orders()
    {
        return view('Services.Products.orders');
    }
    public function list_unit()
    {
        return view('Services.units.units');
    }
}

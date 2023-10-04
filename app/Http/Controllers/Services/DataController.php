<?php

namespace App\Http\Controllers\Services;

use App\Models\Unit;
use App\Models\Suplier;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

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
                'suplier_id' => $request->suplier,
                'user_id' => $request->user()->id,
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
            'unit' => Unit::orderByDesc('created_at')->get(),
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
    // Additional data method
    public function additional_data()
    {
        $context = [
            'unit' => Unit::orderBy('created_at', 'DESC')->paginate(4),
            'category' => Category::orderBy('created_at', 'DESC')->paginate(4),
            'suplier' => Suplier::orderBy('created_at', 'DESC')->paginate(4),
        ];
        return view('Services.Data-utils.list-data-utils', $context);
    }
    public function addAdditional(Request $request, $val)
    {
        // 1 represent to suplier
        if ($val == 1) {
            $request->validate([
                'suplier' => 'required',
            ]);
            Suplier::create([
                'id' => Str::uuid(),
                'suplier' => $request->suplier,
            ]);
            return to_route('Data Tambahan');
            // 2 represent to unit
        } elseif ($val == 2) {
            $request->validate([
                'unit' => 'required',
            ]);
            Unit::create([
                'id' => Str::uuid(),
                'unit' => $request->unit,
            ]);
            return to_route('Data Tambahan');
            // 3 represent to category
        } elseif ($val == 3) {
            $request->validate([
                'category' => 'required',
            ]);
            Category::create([
                'id' => Str::uuid(),
                'category' => $request->category,
            ]);
            return to_route('Data Tambahan');
        }
    }
    public function removeAdditionalData($val, $id)
    {
        // 1 represent to suplier
        if ($val == 1) {
            Suplier::find($id)->delete();
            return to_route('Data Tambahan');
            // 2 represent to unit
        } elseif ($val == 2) {
            Unit::find($id)->delete();
            return to_route('Data Tambahan');
            // 3 represent to category
        } elseif ($val == 3) {
            Category::find($id)->delete();
            return to_route('Data Tambahan');
        }
    }
}

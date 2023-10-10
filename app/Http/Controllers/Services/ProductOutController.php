<?php

namespace App\Http\Controllers\Services;

use App\Exports\ProductOutExport;
use App\Models\Orders;
use App\Models\Products;
use App\Models\ProductOut;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ProductOutController extends Controller
{
    // issuing product method
    public function product_out()
    {
        $productOut = ProductOut::with(['product', 'users'])->paginate(5);
        return view('Services.Products.issuing', compact('productOut'));
    }
    public function formProductOut(Request $request)
    {
        if ($request->isMethod('GET')) {
            $context = [
                'products' => Products::select('id', 'products_name')
                    ->where('quantity', '!=', '0')
                    ->get(),
                'orders' => Orders::with('products')
                    ->where('user_id', $request->user()->id)
                    ->get(),
            ];
            return view('Services.Products.form-out', $context);
        } elseif ($request->isMethod('POST')) {
            $productsData = $request->input('items');
            $insertData = [];
            foreach ($productsData as $productDetails) {
                $productDetails['total'] = preg_replace('/[^0-9]/', '', $productDetails['total']);
                $productsData['total'] = (int) $productDetails['total'];
                $product = Products::find($productDetails['product_id']);
                $product->quantity -= $productDetails['amount_out'];
                $product->save();
                $insertData[] = [
                    'id' => Str::uuid(),
                    'products_id' => $productDetails['product_id'],
                    'amount_out' => $productDetails['amount_out'],
                    'total' => $productDetails['total'],
                    'picker' => $request->input('picker'),
                    'user_id' => $request->user()->id,
                    'created_at' => date('Y-m-d H:s:i'),
                ];
            }
            ProductOut::insert($insertData);
            Orders::truncate();
            return to_route('Barang Keluar');
        }
    }
    public function addToCart(Request $request)
    {
        Orders::create([
            'id' => Str::uuid(),
            'product_id' => $request->id,
            'user_id' => $request->user()->id,
        ]);
        return to_route('Form Barang Keluar');
    }
    public function deleteCart($id)
    {
        Orders::find($id)->delete();
        return to_route('Form Barang Keluar');
    }
    public function exportProductOut()
    {
        return Excel::download(new ProductOutExport, 'Data Produk Keluar.xlsx');
    }
}

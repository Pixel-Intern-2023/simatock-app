<?php

namespace App\Http\Controllers\Services;

use App\Models\Unit;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdditionalDataController extends Controller
{
    // Additional data method
    public function additional_data()
    {
        $context = [
            'unit' => Unit::orderBy('created_at', 'DESC')->paginate(4),
            'category' => Category::orderBy('created_at', 'DESC')->paginate(4),
        ];
        return view('Services.Data-utils.list-data-utils', $context);
    }
    public function addAdditional(Request $request, $val)
    {
        if ($val == 2) {
            $request->validate([
                'unit' => 'required',
            ]);
            Unit::create([
                'id' => Str::uuid(),
                'unit' => $request->unit,
            ]);
            session()->flash('successUnit', 'Data Satuan Berhasil ditambahkan');
            return redirect()->back();
            // 3 represent to category
        } elseif ($val == 3) {
            $request->validate([
                'category' => 'required',
            ]);
            Category::create([
                'id' => Str::uuid(),
                'category' => $request->category,
            ]);
            session()->flash('successCategory', 'Data Kategori Berhasil ditambahkan');
            return redirect()->back();
        }
    }
    public function removeAdditionalData($val, $id)
    {
        if ($val == 2) {
            $unit = Unit::findOrFail($id);
            $products = $unit->products;
            foreach ($products as $product) {
                $product->unit_id = null;
                $product->save();
            }
            $unit->delete();
            session()->flash('successUnit', 'Data Satuan Berhasil dihapus');
            return to_route('Data Tambahan');
        } elseif ($val == 3) {
            $category = Category::findOrFail($id);
            $products = $category->products;
            foreach ($products as $product) {
                $product->category_id = null;
                $product->save();
            }
            $category->delete();
            session()->flash('successCategory', 'Data Satuan Berhasil dihapus');
            return to_route('Data Tambahan');
        }
    }
}

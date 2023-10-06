<?php

namespace App\Http\Controllers\Services;

use App\Models\Unit;
use App\Models\Suplier;
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
        if ($val == 1) {
            $suplier = Suplier::findOrFail($id);
            $products = $suplier->products;
            foreach ($products as $product) {
                $product->suplier_id = null;
                $product->save();
            }
            $suplier->delete();
            return to_route('Data Tambahan');
        } elseif ($val == 2) {
            $unit = Unit::findOrFail($id);
            $products = $unit->products;
            foreach ($products as $product) {
                $product->unit_id = null;
                $product->save();
            }
            $unit->delete();
            return to_route('Data Tambahan');
        } else if ($val == 3) {
            $category = Category::findOrFail($id);
            $products = $category->products;
            foreach ($products as $product) {
                $product->category_id = null;
                $product->save();
            }
            $category->delete();
            return to_route('Data Tambahan');
        }
    }
}

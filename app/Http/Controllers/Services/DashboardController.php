<?php

namespace App\Http\Controllers\Services;

use App\Models\User;
use App\Models\Products;
use App\Models\ProductOut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $context = [
            'product' => Products::count(),
            'productOut' => ProductOut::count(),
            'outOfProduct' => Products::where('quantity', '==', 0)->count(),
            'totalMoney' => ProductOut::sum('total'),
            'bestSell' => ProductOut::mostSoldProduct(),
            'stockAlmostOut' => Products::with('suplier')->where('quantity', '<=', 3)->orderBy('quantity', 'DESC')->get(),
            'chart' => ProductOut::chart(),
        ];
        return view('Services.dashboard.dashboard', $context);
    }
}

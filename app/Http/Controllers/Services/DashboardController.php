<?php

namespace App\Http\Controllers\Services;

use App\Models\User;
use App\Models\Suplier;
use App\Models\Products;
use App\Models\ProductOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $context = [
            'product' => Products::count(),
            'productOut' => ProductOut::count(),
            'outOfProduct' => Products::with('suplier')
                ->where('quantity', '<=', 3)
                ->orWhere('quantity', '==', 0)
                ->orderBy('quantity', 'DESC')
                ->count(),
            'totalMoney' => ProductOut::where(DB::raw('DATE(created_at)'), date('Y-m-d'))->sum('total'),
            'bestSell' => ProductOut::mostSoldProduct(),
            'stockAlmostOut' => Products::with(['unit', 'suplier'])
                ->where('quantity', '<=', 3)
                ->orWhere('quantity', '==', 0)
                ->orderBy('quantity', 'DESC')
                ->take(5)
                ->get(),
            'chart' => ProductOut::chart(),
            'totalAdmin' => User::count(),
            'totalSuplier' => Suplier::count(),
        ];
        return view('Services.dashboard.dashboard', $context);
    }
}

<?php

namespace App\Http\Controllers\Services;

use App\Models\User;
use App\Models\Products;
use App\Models\ProductOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function infoStock()
    {
        $context = [
            'stockAlmostOut' => Products::with('suplier')
                ->where('quantity', '<=', 3)
                ->where('quantity', '==', 0)
                ->orderBy('quantity', 'DESC')
                ->get(),
        ];
        return view('Services.info.infoOutOfStock', $context);
    }
    public function admin()
    {
        $context = [
            'listAdmin' => User::select('name', 'email', 'phone_number', 'gender')->get(),
        ];
        return view('Services.info.infoAdmin', $context);
    }
    public function activities()
    {
        $context = [
            'productOut' => ProductOut::with(['product', 'users'])
                ->where(DB::raw('DATE(created_at)'), date('Y-m-d'))
                ->orderBy('created_at', 'desc')
                ->get(),
            'productIn' => Products::with(['user'])->whereDate('created_at', today())
                ->orWhereDate('updated_at', today())
                ->orderByRaw('GREATEST(created_at, updated_at) DESC')
                ->get(),
        ];
        return view('Services.info.infoActivities', $context);
    }
}

<?php

namespace App\Http\Controllers\Services;

use App\Models\User;
use App\Models\Products;
use App\Models\ProductOut;
use App\Models\Profile_wh;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{
    public function profile()
    {
        $context = [
            'productOut' => ProductOut::with(['product', 'users'])->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get(),
            'productIn' => Products::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get(),
            'whProfile' => Profile_wh::get('warehouse_name'),
        ];
        return view('Services.profile.index', $context);
    }
    public function addProfileWH(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(
                [
                    'whName' => 'required',
                ],
                [
                    'whName.required' => 'Nama Gudang Harus Dimasukkan!'
                ],
            );
            Profile_wh::create([
                'id' => Str::uuid(),
                'warehouse_name' => $request->whName,
            ]);
            return to_route('Profile');
        }
    }
}

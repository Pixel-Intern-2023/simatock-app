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
            'productIn' => Products::where('user_id', auth()->user()->id)->orderByRaw('GREATEST(created_at,updated_at) DESC')->get(),
            'whProfile' => Profile_wh::all(),
        ];
        return view('Services.profile.index', $context);
    }
    public function editWarehouseName(Request $request)
    {
        if ($request->isMethod('PUT')) {
            $request->validate(
                [
                    'whName' => 'required',
                ],
                [
                    'whName.required' => 'Nama Gudang Harus Dimasukkan!'
                ],
            );
            Profile_wh::where('id', $request->id)->update([
                'warehouse_name' => $request->whName,
            ]);
            return to_route('Profile');
        }
    }
}

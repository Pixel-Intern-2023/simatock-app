<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Main data controller
class DataController extends Controller
{
    // list_products
    public function list_product()
    {
        return view('Services.Products.add');
    }
    // list_suplier
    public function list_suplier()
    {
        return view('Services.Supliers.suplier-list');
    }
    public function list_unit()
    {
        return view('Services.units.units');
    }
}

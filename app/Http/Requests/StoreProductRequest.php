<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    // protected $redirect = '/dashboard/main-data/tambah-barang';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $rules = [
            'productName' => 'required',
            'receivingDate' => 'required',
            'quantity' => 'required|min:0',
            'unit' => 'required',
            'category' => 'required',
            'purchPrice' => 'required',
            'custPrice' => 'required',
            'suplier' => 'required',
        ];
        return $rules;
    }
    public function messages()
    {
        $message =  [
            'productName.required' => 'Kolom Nama barang harus diisi.',
            'receivingDate.required' => 'Kolom Tanggal barang masuk harus diisi.',
            'quantity.required' => 'Kolom Stok barang harus diisi.',
            'unit.required' => 'Kolom Satuan barang harus diisi.',
            'unit.min' => 'Kolom Stok barang harus diatas 0.',
            'category.required' => 'Kolom Kategori barang harus diisi.',
            'purchPrice.required' => 'Kolom Harga beli barang harus diisi.',
            'custPrice.required' => 'Kolom harga jual barang harus diisi.',
            'suplier.required' => 'Kolom suplier harus diisi',
        ];
        return $message;
    }
}

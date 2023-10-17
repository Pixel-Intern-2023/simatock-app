@extends('Layouts.base')
@section('content')
    <a href="{{ route('List Barang') }}">
        <div class="card mb-3 px-4 py-3">
            <h1><i class="uil uil-angle-left"></i>Kembali</h1>
        </div>
    </a>
    <div class="card">
        <div class="p-6">
            <h4 class="mb-5 uppercase dark:text-gray-300">Form Tambah Barang</h4>
            <form action="{{ route('Edit Data', ['id' => $product->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 w-full">
                    <label class="mb-2 block font-semibold" for="example-email">Nama Barang</label>
                    <div>
                        <input
                            @error('productName')
                                style="border: 1px solid red"
                                @enderror
                            class="form-input w-full" name="productName" placeholder="Cth: Beras" type="text"
                            value="{{ $product->products_name }}">
                    </div>
                    @error('productName')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="w-1/2">
                        <label class="mb-2 block font-semibold" for="example-password">Stok</label>
                        <div>
                            <input
                                @error('quantity')
                                style="border: 1px solid red"
                                @enderror
                                class="form-input w-full placeholder:text-gray-400" min="{{ $product->quantity }}"
                                name="quantity" placeholder="Cth: 10" type="number" value="{{ $product->quantity }}">
                            <small>Tambah Stok Barang Di sini</small>
                            @error('quantity')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-1/4">
                        <label class="mb-2 block font-semibold" for="example-password">Satuan</label>
                        <select
                            @error('unit')
                        style="border: 1px solid red"
                        @enderror
                            class="form-select mb-3" name="unit">
                            <option value=""></option>
                            @foreach ($unit as $unt)
                                <option {{ ($product->unit->id ?? null) === $unt->id ? 'selected' : ' ' }}
                                    value="{{ $unt->id }}">{{ $unt->unit }}</option>
                            @endforeach
                        </select>

                        @error('unit')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-1/4">
                        <label class="mb-2 block font-semibold" for="example-password">Kategori</label>
                        <select
                            @error('category')
                        style="border: 1px solid red"
                        @enderror
                            class="form-select mb-3" name="category">
                            <option value=""></option>
                            @foreach ($category as $cate)
                                <option {{ ($product->category->id ?? null) === $cate->id ? 'selected' : ' ' }}
                                    value="{{ $cate->id }}">{{ $cate->category }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="w-1/2">
                        <label class="mb-2 block font-semibold" for="example-password">Harga Beli</label>
                        <div>
                            <input
                                @error('purchPrice')
                                style="border: 1px solid red"
                                @enderror
                                class="form-input w-full placeholder:text-gray-400" min="0" name="purchPrice"
                                placeholder="Cth: 10.000" type="number" value="{{ $product->purch_price }}">
                            @error('purchPrice')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-1/2">
                        <label class="mb-2 block font-semibold" for="example-password">Harga Jual</label>
                        <div>
                            <input
                                @error('custPrice')
                                style="border: 1px solid red"
                                @enderror
                                class="form-input w-full placeholder:text-gray-400" min="0" name="custPrice"
                                placeholder="Cth: 11.000" type="number" value="{{ $product->cust_price }}">
                            @error('custPrice')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2 block font-semibold" for="example-password">Suplier</label>
                    <select
                        @error('suplier')
                    style="border: 1px solid red"
                    @enderror
                        class="form-select mb-3" name="suplier">
                        @foreach ($suplier as $spl)
                            <option value=""></option>
                            <option {{ ($product->suplier->id ?? null) === $spl->id ? 'selected' : ' ' }}
                                value="{{ $spl->id }}">{{ $spl->suplier }}</option>
                        @endforeach
                    </select>
                    <small>Ubah Suplier Jika Suplier barang berubah</small>
                    @error('suplier')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn bg-primary/90 hover:bg-primary text-white" type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div> <!-- end card -->
@endsection

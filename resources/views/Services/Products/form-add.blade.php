@extends('Layouts.base')
@section('content')
<a href="{{ route('List Barang') }}">
    <div class="px-4 py-3 card mb-3">
        <h1><i class="uil uil-angle-left"></i>Kembali</h1>
    </div>
</a>
    <div class="card">
        <div class="p-6">
            <h4 class="mb-5 uppercase dark:text-gray-300">Form Tambah Barang</h4>
            <form action="{{ route('addProduct') }}" method="POST">
                @csrf
                <div class="mb-3 w-full sm:w-2/3">
                    <label class="mb-2 block font-semibold" for="example-email">Nama Barang</label>
                    <div>
                        <input
                            @error('productName')
                                style="border: 1px solid red"
                                @enderror
                            class="form-input w-full" name="productName" placeholder="Cth: Beras" type="text"
                            value="{{ old('productName') }}">
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
                                class="form-input w-full placeholder:text-gray-400" min="0" name="quantity"
                                placeholder="Cth: 10" type="number" value="{{ old('quantity') }}">
                            @error('quantity')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="w-1/4">
                        <label class="mb-2 block font-semibold" for="example-password">Satuan</label>
                        <div class="flex gap-1">
                            <select
                                @error('unit')
                            style="border: 1px solid red"
                            @enderror
                                class="form-select mb-3" name="unit">
                                <option disabled selected>-- Pilih Satuan --</option>
                                @foreach ($unit as $item)
                                    <option value="{{ $item->id }}">{{ $item->unit }}</option>
                                @endforeach
                            </select>
                            <a class="btn bg-success/90 hover:bg-success h-9 w-9 text-white" href="{{ route('Data Tambahan') }}"><i
                                    class="uil uil-plus"></i></a>
                        </div>
                        <small>Tambah satuan barang</small>
                        @error('unit')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-1/4">
                        <label class="mb-2 block font-semibold" for="example-password">Kategori</label>
                        <div class="flex gap-1">
                            <select
                                @error('category')
                            style="border: 1px solid red"
                            @enderror
                                class="form-select mb-3" name="category">
                                <option disabled selected>-- Pilih Kategori --</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endforeach
                            </select>
                            <a class="btn bg-success/90 hover:bg-success h-9 w-9 text-white" href="{{ route('Data Tambahan') }}"><i
                                    class="uil uil-plus"></i></a>
                        </div>
                        <small>Tambah kategori barang</small>
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
                                placeholder="Cth: 10.000" value="{{ old('purchPrice') }}" x-data
                                x-mask:dynamic="$money($input)">
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
                                placeholder="Cth: 11.000" value="{{ old('custPrice') }}" x-data
                                x-mask:dynamic="$money($input)">
                            @error('custPrice')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2 block font-semibold" for="example-password">Suplier</label>
                    <div class="flex gap-1">
                        <select
                            @error('suplier')
                        style="border: 1px solid red"
                        @enderror
                            class="form-select mb-3" name="suplier">
                            <option disabled selected>-- Pilih Suplier --</option>
                            @foreach ($suplier as $item)
                                <option value="{{ $item->id }}">{{ $item->suplier }}</option>
                            @endforeach
                        </select>
                        <a class="btn bg-success/90 hover:bg-success h-9 w-9 text-white" href="{{ route('Form Tambah Suplier') }}"><i
                            class="uil uil-plus"></i></a>
                    </div>
                    @error('suplier')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn bg-primary/90 hover:bg-primary text-white" type="submit">Tambah Barang</button>
            </form>
        </div>
    </div> <!-- end card -->
@endsection

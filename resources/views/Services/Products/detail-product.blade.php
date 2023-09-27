@extends('Layouts.base')
@section('content')
    <div class="card">
        <div class="p-6">
            <h4 class="mb-5 uppercase dark:text-gray-300">Form Tambah Barang</h4>
            {{-- @dd($product->id) --}}
            <form action="{{ route('edit', ['id' => $product->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex gap-2">
                    <div class="mb-3 w-3/4">
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
                    <div class="mb-3 w-1/4">
                        <label class="mb-2 font-semibold">Tanggal Masuk</label>
                        <input
                            @error('receivingDate')
                            style="border: 1px solid red"
                            @enderror
                            class="form-input" id="datetime-datepicker" name="receivingDate" type="text"
                            value="{{ $product->receiving_date }}">
                        <small>Silahkan Ganti tanggal sesuai barang masuk</small>
                        @error('receivingDate')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
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
                                placeholder="Cth: 10" type="number" value="{{ $product->quantity }}">
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
                            @foreach ($unit as $item)
                                <option value="{{ $item->id }}">{{ $item->unit }}</option>
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
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->category }}</option>
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
                        @foreach ($suplier as $item)
                            <option value="{{ $item->id }}">{{ $item->suplier }}</option>
                        @endforeach
                    </select>
                    @error('suplier')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn bg-primary/90 hover:bg-primary text-white" type="submit">Submit</button>
            </form>
        </div>
    </div> <!-- end card -->
@endsection

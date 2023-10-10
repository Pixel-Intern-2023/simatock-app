@extends('Layouts.base')
@section('content')
    <div class="card mb-5">
        <div class="p-6">
            <h4 class="mb-5 uppercase dark:text-gray-300">Form Tambah Barang</h4>
            <form action="{{ route('Edit Suplier', ['id' => $suplier->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="gap-2 sm:flex">
                    <div class="mb-3 w-full sm:w-2/3">
                        <label class="mb-2 block font-semibold" for="example-email">Nama Suplier</label>
                        <div>
                            <input
                                @error('suplierName')
                                style="border: 1px solid red"
                                @enderror
                                class="form-input w-full" name="suplierName" placeholder="Cth: CV. Aji Naratama"
                                type="text" value="{{ $suplier->suplier }}">
                        </div>
                        @error('suplierName')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 w-full sm:w-1/4">
                        <label class="mb-2 font-semibold">Nomor Telepon</label>
                        <div>
                            <input
                                @error('noTelp')
                                style="border: 1px solid red"
                                @enderror
                                class="form-input w-full" name="noTelp" placeholder="Cth: 08976873646" type="text"
                                value="{{ $suplier->phone_number }}">
                        </div>
                        @error('noTelp')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 w-full">
                    <label class="mb-2 font-semibold">Alamat Kantor</label>
                    <textarea @error('address')
                    style="border: 1px solid red"
                    @enderror
                        class="form-input dark:bg-transparent" id="address" name="address" placeholder="Masukkan alamat">{{ $suplier->address }}</textarea>
                    @error('address')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn bg-primary/90 hover:bg-primary text-white" type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div> <!-- end card -->
    <div class="card">
        <div class="p-6">
            <div class="mb-6 flex items-start justify-between">
                <h6 class="uppercase dark:text-gray-300">Data Barang Suplier {{ $suplier->suplier }}</h6>
            </div>
            <div class="overflow-auto">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                    <thead>
                        <tr>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                #</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Nama Produk</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Quantity</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Harga Beli</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Tgl Kirim</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                        @forelse ($productBySuplier as $product)
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ '#' . Str::substr($product->id, 0, 8) }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $product->products_name }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $product->quantity }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ 'IDR. ' . number_format($product->purch_price) . '/' . $product->unit->unit }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $product->created_at->format('D,d-m-Y') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

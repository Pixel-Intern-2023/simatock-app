@extends('Layouts.base')
@section('content')
@section('content')
<a href="#" onclick="history.back()">
    <div class="px-4 py-3 card mb-3">
        <h1><i class="uil uil-angle-left"></i>Kembali</h1>
    </div>
</a>
    <div class="card">
        <div class="p-6">
            <h4 class="mb-5 uppercase dark:text-gray-300">Form Tambah Barang</h4>
            <form action="{{ route('Form Tambah Suplier') }}" method="POST">
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
                                type="text" value="{{ old('suplierName') }}">
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
                                class="form-input w-full" name="noTelp" placeholder="Cth: 08976873646" type="text" value="{{ old('noTelp') }}">
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
                        class="form-input dark:bg-transparent" id="address" name="address" placeholder="Masukkan alamat">{{ old('address') }}</textarea>
                    @error('address')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn bg-primary/90 hover:bg-primary text-white" type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div> <!-- end card -->
@endsection

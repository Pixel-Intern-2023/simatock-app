@extends('Layouts.base')
@section('content')
    <div class="flex flex-wrap gap-4 sm:flex-nowrap">
        <!-- Suplier -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-5 flex items-start justify-between gap-5">
                    <h6 class="uppercase dark:text-gray-300">Data Suplier</h6>

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
                                    Suplier</th>

                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($suplier as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $loop->iteration }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $item->suplier }}</td>
                                    <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                        <a class="rounded bg-red-500 px-3 py-1 font-semibold" href="{{ route('Hapus Data Tambahan',['id'=>$item->id,'val'=>1]) }}"><i
                                                class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">
                                    <div class="flex" x-data="{ open: false }">
                                        <a class="btn btn-sm btn-sm float-right text-green-600"
                                            data-hs-overlay="#hs-basic-modal" href="#" x-on:click="open=!open"><i
                                                class="uil uil-plus-circle text-xl"></i></a>
                                        <form action="{{ route('Tambah Data Tambahan', ['val' => 1]) }}" class="flex"
                                            method="POST" x-show="open" x-transition>
                                            @csrf
                                            <input class="form-input w-full placeholder:text-gray-400" name="suplier"
                                                placeholder="type here...">
                                            <button
                                                class="block bg-green-600/90 px-5 text-white hover:bg-green-700">Tambah</button>
                                        </form>
                                    </div>
                                    @error('suplier')
                                        <small class="text-red-600">{{ $message }}</small>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{ $suplier->links() }}
                </div>
            </div>
        </div>
        <!-- Unit -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-6 flex items-start justify-between">
                    <h6 class="uppercase dark:text-gray-300">Data Satuan</h6>
                    <a class="btn btn-sm btn-sm bg-green-600/80 text-white hover:bg-green-800" href="task-list.html"><i
                            class='uil uil-plus me-1'></i> Tambah</a>
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
                                    Satuan</th>

                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($unit as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $loop->iteration }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $item->unit }}</td>
                                    <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                        <a class="rounded bg-red-500 px-3 py-1 font-semibold" href="{{ route('Hapus Data Tambahan',['id'=>$item->id,'val'=>2]) }}"><i
                                                class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">
                                    <div class="flex" x-data="{ open: false }">
                                        <a class="btn btn-sm btn-sm float-right text-green-600"
                                            data-hs-overlay="#hs-basic-modal" href="#" x-on:click="open=!open"><i
                                                class="uil uil-plus-circle text-xl"></i></a>
                                        <form action="{{ route('Tambah Data Tambahan', ['val' => 2]) }}" class="flex"
                                            method="POST" x-show="open" x-transition>
                                            @csrf
                                            <input class="form-input w-full placeholder:text-gray-400" name="unit"
                                                placeholder="type here...">
                                            <button
                                                class="bg-green-600/90 px-5 text-white hover:bg-green-700">Tambah</button>
                                        </form>
                                    </div>
                                    @error('unit')
                                        <small class="text-red-600">{{ $message }}</small>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{ $unit->links() }}
                </div>
            </div>
        </div>
        <!-- Category -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-6 flex items-start justify-between">
                    <h6 class="uppercase dark:text-gray-300">Data Kategori</h6>
                    <a class="btn btn-sm btn-sm bg-green-600/80 text-white hover:bg-green-800" href="task-list.html"><i
                            class='uil uil-plus me-1'></i> Tambah</a>
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
                                    Kategori</th>

                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($category as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $loop->iteration }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $item->category }}</td>
                                    <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                        <a class="rounded bg-red-500 px-3 py-1 font-semibold" href="{{ route('Hapus Data Tambahan',['id'=>$item->id,'val'=>3]) }}"><i
                                                class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">
                                    <div class="flex" x-data="{ open: false }">
                                        <a class="btn btn-sm btn-sm float-right text-green-600"
                                            data-hs-overlay="#hs-basic-modal" href="#" x-on:click="open=!open"><i
                                                class="uil uil-plus-circle text-xl"></i></a>
                                        <form action="{{ route('Tambah Data Tambahan', ['val' => 3]) }}" class="flex"
                                            method="POST" x-show="open" x-transition>
                                            @csrf
                                            <input class="form-input w-full placeholder:text-gray-400" name="category"
                                                placeholder="type here...">
                                            <button
                                                class="bg-green-600/90 px-5 text-white hover:bg-green-700">Tambah</button>
                                        </form>
                                    </div>
                                    @error('category')
                                        <small class="text-red-600">{{ $message }}</small>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{ $category->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

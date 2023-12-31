@extends('Layouts.base')
@section('content')
    <div class="flex flex-wrap gap-4 sm:flex-nowrap">
        <!-- Unit -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-6 flex items-start justify-between">
                    <h6 class="uppercase dark:text-gray-300">Data Satuan</h6>
                </div>
                @if (session()->has('successUnit'))
                <div class="bg-success/10 text-success border-success/20 my-5 flex items-center justify-between rounded border px-5 py-3 text-sm"
                        id="dismiss-alert">
                        <p>
                            <span class="font-bold">{{ session('successUnit') }}
                        </p>

                        <button class="text-xl/[0]" data-hs-remove-element="#dismiss-alert" type="button">
                            <i class="uil uil-multiply text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-primary end -->
                @endif
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
                            @forelse ($unit as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ '#' . Str::substr($item->id, 0, 8) }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $item->unit }}</td>
                                    <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                        <a class="btn-delete rounded bg-red-500 px-3 py-1 font-semibold"
                                            href="{{ route('Hapus Data Tambahan', ['id' => $item->id, 'val' => 2]) }}"
                                            id="#btn-delete"><i class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="mt-3 text-center font-bold uppercase" colspan="5">
                                        No Data
                                    </td>
                                </tr>
                            @endforelse
                            <tr>
                                <td colspan="3">
                                    <div class="mt-3 flex" x-data="{ open: false }">
                                        <a class="btn btn-sm btn-sm text-success float-right"
                                            data-hs-overlay="#hs-basic-modal" href="#" x-on:click="open=!open"><i
                                                class="uil uil-plus-circle text-xl"></i></a>
                                        <form action="{{ route('Tambah Data Tambahan', ['val' => 2]) }}" class="flex"
                                            method="POST" x-show="open" x-transition>
                                            @csrf
                                            <input class="form-input w-full placeholder:text-gray-400" name="unit"
                                                placeholder="type here...">
                                            <button class="bg-success hover:bg-success px-5 text-white">Tambah</button>
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
                </div>
                @if (session()->has('successCategory'))
                <div class="bg-success/10 text-success border-success/20 my-5 flex items-center justify-between rounded border px-5 py-3 text-sm"
                        id="dismiss-alert">
                        <p>
                            <span class="font-bold">{{ session('successCategory') }}
                        </p>

                        <button class="text-xl/[0]" data-hs-remove-element="#dismiss-alert" type="button">
                            <i class="uil uil-multiply text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-primary end -->
                @endif
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
                            @forelse ($category as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ '#' . Str::substr($item->id, 0, 8) }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $item->category }}</td>
                                    <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                        <a class="btn-delete rounded bg-red-500 px-3 py-1 font-semibold"
                                            href="{{ route('Hapus Data Tambahan', ['id' => $item->id, 'val' => 3]) }}"
                                            id="#btn-delete"><i class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="mt-3 text-center font-bold uppercase" colspan="5">
                                        No Data
                                    </td>
                                </tr>
                            @endforelse
                            <tr>
                                <td colspan="3">
                                    <div class="mt-3 flex" x-data="{ open: false }">
                                        <a class="btn btn-sm btn-sm text-success float-right"
                                            data-hs-overlay="#hs-basic-modal" href="#" x-on:click="open=!open"><i
                                                class="uil uil-plus-circle text-xl"></i></a>
                                        <form action="{{ route('Tambah Data Tambahan', ['val' => 3]) }}" class="flex"
                                            method="POST" x-show="open" x-transition>
                                            @csrf
                                            <input class="form-input w-full placeholder:text-gray-400" name="category"
                                                placeholder="type here...">
                                            <button class="bg-success/90 hover:bg-success px-5 text-white">Tambah</button>
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
    @section('script')
        <script>
            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();
                // console.log('halo');
                var link = $(this).attr('href');
                Swal.fire({
                    title: 'Yakin Ingin hapus data ini?',
                    text: 'Data ini akan terhapus di tabel produk',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus data!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link;
                    }
                });
            });
        </script>
    @endsection
@endsection

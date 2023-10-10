@extends('Layouts.base')
@section('content')
    <div class="card">
        <div class="p-6">
            <div class="mb-6 flex items-start justify-between">
                <h6 class="uppercase dark:text-gray-300">Data Suplier</h6>
                <a class="btn btn-sm btn-sm bg-success hover:bg-success text-white"
                    href="{{ route('Form Tambah Suplier') }}"><i class='uil uil-plus me-1'></i> Tambah</a>
            </div>
            @if (session()->has('success'))
                <div class="bg-success/10 text-success border-success/20 my-2 flex items-center justify-between rounded border px-5 py-3 text-sm"
                    id="dismiss-alert">
                    <p>
                        <span class="font-bold">{{ session('success') }}
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
                                Suplier</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                No. Telp</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Alamat</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                        @forelse ($suplier as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ '#' . Str::substr($item->id, 0, 8) }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->suplier }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->phone_number }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->address }}</td>
                                <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                    <a class="bg-warning rounded px-3 py-1 font-semibold"
                                        href="{{ route('Edit Suplier', ['id' => $item->id]) }}">Detail
                                    </a>
                                    <a class="rounded bg-red-500 px-3 py-1 font-semibold" href="">Hapus
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="mt-3 text-center font-bold uppercase" colspan="5">
                                    No Data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

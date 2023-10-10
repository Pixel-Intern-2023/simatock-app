@extends('Layouts.base')
@section('content')
<div class="card w-full">
    <div class="p-6">
        <div class="mb-6 flex items-start justify-between">
            <h6 class="uppercase dark:text-gray-300">Barang Baru Masuk</h6>
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
                            Nama Barang</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Suplier</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Stok</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Admin</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Tanggal Masuk</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Pukul</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                    @forelse ($products as $item)
                    <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ '#' . Str::substr($item->id, 0, 8) }}
                            </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->products_name }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->suplier->suplier }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->quantity }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->user->name }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ date('D, d-M-Y',strtotime($item->created_at)) }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ date('H:s',strtotime($item->created_at)) }}
                           </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="mt-3 text-center font-bold uppercase" colspan="7">
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

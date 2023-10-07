@extends('Layouts.base')
@section('content')
<div class="card w-full">
    <div class="p-6">
        <div class="mb-6 flex items-start justify-between">
            <h6 class="uppercase dark:text-gray-300">Data Barang Keluar</h6>
            <a class="btn btn-sm btn-sm bg-green-600/80 text-white hover:bg-green-800" href="{{ route('Form Barang Keluar') }}"><i
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
                            Nama Barang</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Picker</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Total</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Admin</th>
                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                            scope="col">
                            Tanggal Keluar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                    @foreach ($productOut as $item)
                    <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $loop->iteration }}
                            </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->product->products_name }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->picker }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ 'IDR '. number_format($item->total) }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ $item->users->name }}
                           </td>
                        <td
                            class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ date('D, d-M-Y',strtotime($item->created_at)) }}
                           </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $productOut->links() }}
        </div>
    </div>
</div>
@endsection

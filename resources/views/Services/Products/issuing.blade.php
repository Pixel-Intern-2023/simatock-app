@extends('Layouts.base')
@section('content')
    <div class="card w-full">
        <div class="p-6">
            <div class="mb-6 flex items-start justify-between">
                <h6 class="uppercase dark:text-gray-300">Data Barang Keluar</h6>
                <div>
                    <a class="btn btn-sm btn-sm bg-success hover:bg-green-800 text-white"
                        href="{{ route('Form Barang Keluar') }}"><i class='uil uil-plus me-1'></i> Tambah</a>
                    <a class="btn bg-primary/90 btn-sm text-white hover:bg-blue-800" href="{{ route('downloadDataOut') }}">
                        <i class='uil uil-export me-1'></i> Export
                    </a>
                </div>
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
                                Quantity</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Satuan</th>
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
                        @forelse ($productOut as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ '#' . Str::substr($item->id, 0, 8) }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->product->products_name }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->amount_out }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ optional($item->product->unit)->unit ?? 'Satuan tidak tersedia' }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->picker }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ 'IDR ' . number_format($item->total) }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->users->name }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ date('D, d-M-Y', strtotime($item->created_at)) }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="mt-3 text-center font-bold uppercase" colspan="6">
                                    No Data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $productOut->links() }}
            </div>
        </div>
    </div>
@endsection

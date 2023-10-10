@section('scriptTop')
    <script src="https://code.highcharts.com/10/highcharts.js"></script>
@endsection
@extends('Layouts.base')
@section('content')
    <div class="space-y-5">
        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <a href="{{ route('list-barang') }}">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <div class="flex-grow-1">
                                <span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Total
                                    Barang</span>
                                <h3 class="mt-2 text-2xl dark:text-gray-300">{{ $product }}</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <i class="fill-primary/20 stroke-primary h-10 w-10" data-lucide="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('Barang Keluar') }}">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <div class="flex-grow-1">
                                <span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Total Barang
                                    Keluar</span>
                                <h3 class="mt-2 text-2xl dark:text-gray-300">{{ $productOut }}</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <i class="fill-success/20 stroke-success h-10 w-10" data-lucide="truck"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('List Stok Habis') }}">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <div class="flex-grow-1">
                                <span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">stok hampir
                                    habis</span>
                                <h3 class="mt-2 text-2xl dark:text-gray-300">{{ $outOfProduct }}</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <i class="h-10 w-10 fill-red-500/20 stroke-red-600" data-lucide="arrow-down-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- stats + charts -->
        <div class="grid gap-5 xl:grid-cols-3">
            <!-- overview -->
            <div class="card">
                <div>
                    <div class="flex items-center justify-between p-5">
                        <h5 class="mb-0 uppercase dark:text-gray-300">Info</h5>
                        <div class="h-4">
                            <div
                                class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:right-top]">
                                <button class="hs-dropdown-toggle rounded" type="button">
                                    <i class="uil uil-ellipsis-v text-base"></i>
                                </button>
                                <div
                                    class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-40 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                    <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:;">
                                        <i class="uil uil-edit-alt me-1.5"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:;">
                                        <i class="uil uil-refresh me-1.5"></i>
                                        <span>Refresh</span>
                                    </a>
                                    <hr class="my-2 dark:border-gray-600">
                                    <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                        href="javascript:;">
                                        <i class="uil uil-trash-alt me-1.5"></i>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- stat 1 -->
                    <div class="flex border-b p-5 dark:border-gray-600">
                        <div class="flex-grow">
                            <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">{{ $totalSuplier }}</h4>
                            <span class="text-gray-500 dark:text-gray-400">Total Mitra Suplier</span>
                        </div>
                        <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="heart-handshake"></i>
                    </div>
                    <!-- stat 2 -->
                    <div class="flex border-b p-5 dark:border-gray-600">
                        <div class="flex-grow">
                            <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">{{ $totalAdmin }}</h4>
                            <span class="text-gray-500 dark:text-gray-400">Total Admin</span>
                        </div>
                        <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="users"></i>
                    </div>
                    <!-- stat 3 -->
                    <div class="flex border-b p-5 dark:border-gray-600">
                        <div class="flex-grow">
                            <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">{{ 'IDR. ' . number_format($totalMoney) }}
                            </h4>
                            <span class="text-gray-500 dark:text-gray-400">Penjualan Hari Ini</span>
                        </div>
                        <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="shopping-bag"></i>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-2">
                <div class="card">
                    <div class="p-6">
                        <h5 class="uppercase">stok hampir habis</h5>
                        <div class="overflow-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    #</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Product</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Suplier</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Stok</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Satuan</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                            @forelse ($stockAlmostOut as $item)
                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        {{ '#' . Str::substr($item->id, 0, 8) }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->products_name }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->suplier->suplier }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->quantity }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->unit->unit }}
                                                        </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="mt-3 text-center font-bold uppercase" colspan="5">
                                                        no data
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="flex items-center justify-center">
                                        <a class="btn bg-primary/90 btn-sm hover:bg-primary text-white"
                                            href="{{ route('List Stok Habis') }}">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end table-responsive-->
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- products -->
        <div class="grid gap-5 xl:grid-cols-12">
            <div class="xl:col-span-5">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <h5 class="uppercase">Barang Terlaris</h5>
                        </div>
                        <div class="overflow-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    #</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Produk</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Jumlah Terjual</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                            @forelse ($bestSell as $item)
                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        {{ $loop->iteration }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->products_name }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->total_keluar }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="bg-success/10 text-success inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium"><i
                                                                class="uil uil-arrow-up"></i>Terlaris</span>
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
                        </div><!-- end table-responsive-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
            <div class="xl:col-span-7">
                <div class="card dark:bg">
                    <div class="p-5">
                        <div id="chart"></div>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row -->
    </div>
@endsection
@section('script')
    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'center',
                text: 'Grafik Penjualan'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total Penjualan'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>:Terjual <b>{point.y}</b><br/>'
            },

            series: [{
                name: 'Produk',
                colorByPoint: true,
                data: <?= json_encode($chart) ?>
            }],
        });
    </script>
@endsection

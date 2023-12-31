@section('scriptTop')
    <script src="https://code.highcharts.com/10/highcharts.js"></script>
@endsection
@extends('Layouts.base')
@section('content')
    <div class="space-y-5">
        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <a href="{{ route('List Barang') }}">
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
        @if ($totalSuplier == 0)
            <div class="bg-warning/10 text-warning border-warning/20 my-5 flex items-center justify-between rounded border px-5 py-3 text-sm"
                id="dismiss-alert">
                <p>
                    <span class="font-bold">Data Suplier Kosong! Silahkan isi data suplier terlebih dahulu <a
                            class="underline" href="{{ route('Form Tambah Suplier') }}">Klik Di sini!</a>
                </p>

                <button class="text-xl/[0]" data-hs-remove-element="#dismiss-alert" type="button">
                    <i class="uil uil-multiply text-xl"></i>
                </button> <!-- button end -->
            </div> <!-- dismiss-example-primary end -->
        @endif
        @if ($product == 0)
            <div class="bg-warning/10 text-warning border-warning/20 my-5 flex items-center justify-between rounded border px-5 py-3 text-sm"
                id="dismiss-alert">
                <p>
                    <span class="font-bold">Data Barang Kosong! Silahkan tambahkan data barang <a class="underline"
                            href="{{ route('Tambah Barang') }}">Klik Di sini!</a>
                </p>

                <button class="text-xl/[0]" data-hs-remove-element="#dismiss-alert" type="button">
                    <i class="uil uil-multiply text-xl"></i>
                </button> <!-- button end -->
            </div> <!-- dismiss-example-primary end -->
        @endif
        <!-- best sell + chart -->
        <div class="grid gap-5 xl:grid-cols-12">
            <div class="xl:col-span-5">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <h5 class="uppercase">Barang Terlaris</h5>
                        </div>
                        <div class="overflow-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-auto">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    #</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Produk</th>
                                                {{-- <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Jumlah Terjual</th> --}}
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
                                                    {{-- <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->total_keluar }}</td> --}}
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
        <!-- stats + charts -->
        <div class="grid gap-5 md:grid-cols-1 xl:grid-cols-3">
            <!-- info -->
            <div class="overflow-auto">
                <div class="card">
                    <div>
                        <div class="flex items-center justify-between p-5">
                            <h5 class="mb-0 uppercase dark:text-gray-300">Info</h5>
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
                                <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">
                                    {{ 'IDR. ' . number_format($totalMoney) }}
                                </h4>
                                <span class="text-gray-500 dark:text-gray-400">Penjualan Hari Ini</span>
                            </div>
                            <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="shopping-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- almost Out of stock --}}
            <div class="xl:col-span-2">
                <div class="card">
                    <div class="p-6">
                        <h5 class="uppercase">stok hampir habis</h5>
                        <div class="overflow-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-x-auto">
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
                                                        {{ optional($item->suplier)->suplier ?? 'Suplier tidak tersedia' }}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->quantity }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ optional($item->unit)->unit ?? 'Satuan tidak tersedia' }}
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

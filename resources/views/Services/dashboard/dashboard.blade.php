@section('scriptTop')
    <script src="https://code.highcharts.com/10/highcharts.js"></script>
@endsection
@extends('Layouts.base')
@section('content')
    <div class="space-y-5">
        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            <a href="{{ route('list-barang') }}">
                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">Total
                                    Barang</span>
                                <h3 class="text-2xl dark:text-gray-300">{{ $product }}</h3>
                            </div>
                            <div class="flex-shrink-0 text-center">
                                <div class="apex-charts" id="today-revenue-chart"></div>
                                <span class="text-success fw-bold fs-13"><i class='uil uil-box'></i>
                                    {{ $product }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('Barang Keluar') }}">
                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">Transaksi Barang
                                    Keluar</span>
                                <h3 class="text-2xl dark:text-gray-300">{{ $productOut }}</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <div class="apex-charts" id="today-product-sold-chart">
                                </div>
                                <span class="text-danger fw-bold fs-13"><i class='uil uil-truck'></i>
                                    {{ $productOut }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">Stok Habis</span>
                                <h3 class="text-2xl dark:text-gray-300">{{ $outOfProduct }}</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <div class="apex-charts" id="today-new-visitors-chart">
                                </div>
                                <span class="text-danger fw-bold fs-13"><i class='uil uil-arrow-down'></i>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">Total
                                    Penjualan</span>
                                <h3 class="text-xl dark:text-gray-300">{{ 'IDR. ' . number_format($totalMoney) }}</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <div class="apex-charts" id="today-new-customer-chart">
                                </div>
                                <span class="text-success fw-bold fs-13"><i class='uil uil-money-bill'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- products -->
        <div class="grid gap-5 xl:grid-cols-12">
            <div class="xl:col-span-6">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <h5 class="uppercase">Barang Terlaris</h5>
                            <a class="btn bg-primary/90 btn-sm hover:bg-primary text-white" href="#">
                                <i class='uil uil-export me-1'></i> Export
                            </a>
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
                                                no data
                                            @endforelse
                                            {{-- <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                    #98754</td>
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                    ASOS Ridley High</td>
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                    Otto B</td>
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                    <span
                                                        class="bg-warning/10 text-warning inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Pending</span>
                                                </td>
                                            </tr>
                                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                    #98752</td>
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                    Half Sleeve Shirt</td>
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                    Dave B</td>
                                                <td
                                                    class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                    <span
                                                        class="bg-danger/10 text-danger inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Declined</span>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end table-responsive-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
            <div class="xl:col-span-6">
                <div class="card">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <h5 class="uppercase">Stok Hampir Habis</h5>
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
                                                    Product</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Suplier</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Stok</th>
                                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                    scope="col">
                                                    Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                            @forelse ($stockAlmostOut as $item)
                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        {{ $loop->iteration }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->products_name }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->suplier->suplier }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        {{ $item->quantity }}</td>
                                                    <td class="whitespace-nowrap px-4 py-4 text-start text-white">
                                                        <a class="rounded bg-yellow-400 px-3 py-1 font-semibold"
                                                            href="{{ route('Edit Data', ['id' => $item->id]) }}">Detail</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                no Data
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end table-responsive-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
            <div class="col-span-12">
                <div class="card dark:bg">
                    <div class="p-5">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
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
                name: 'Browsers',
                colorByPoint: true,
                data: <?= json_encode($chart) ?>
            }],
        });
    </script>
@endsection

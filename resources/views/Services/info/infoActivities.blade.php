@extends('Layouts.base')
@section('content')
    <h2 class="text-center text-xl dark:text-gray-300">Aktifitas Hari Ini</h2>
    <div class="relative space-y-12 pb-6">
        <!-- Center Border Line -->
        <div
            class="absolute start-10 top-0 -z-10 h-full -translate-x-1/2 border border-s-2 border-gray-300 rtl:translate-x-1/2 dark:border-white/10 md:start-1/2">
        </div>
        <div class="md:text-center">
            <h5 class="bg-primary inline rounded px-10 py-2 text-white">
                {{ date('D, d-m-Y') }}
            </h5>
        </div>
        <!-- left -->
        @forelse ($productOut as $item)
            <div class="text-start md:text-end">
                <div class="absolute start-10 mt-6 -translate-x-1/2 rtl:translate-x-1/2 md:start-1/2">
                    <div class="relative">
                        <div
                            class="text-danger flex h-6 w-6 items-center justify-center rounded-full bg-white dark:bg-gray-700">
                            <i class="uil uil-record-audio"></i>
                        </div>
                        <div class="absolute -end-6 top-3 -z-10 h-[2px] w-12 bg-gray-400 md:-end-0 md:-start-6"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="col-span-2 md:col-span-1">
                        <div class="flex items-start gap-6">
                            <div class="ms-20 mt-4 md:order-last md:me-10 md:ms-0">
                                <h2
                                    class="bg-primary/20 text-primary flex h-9 w-9 items-center justify-center rounded-full">
                                    02</h2>
                                <p class="pt-2 text-center">Jun</p>
                            </div>
                            <div class="relative me-5 md:me-0 md:ms-10">
                                <div class="card p-5">
                                    <h4 class="mb-1.5 text-base dark:text-gray-300">Produk Keluar</h4>
                                    <p class="mb-4 text-gray-500 dark:text-gray-400">
                                        {{ $item->product->products_name . ' ' . $item->product->unit->unit }} dikeluarkan
                                        oleh admin {{ $item->users->name }} dan diterima oleh {{ $item->picker }}</p>
                                    <a class="btn bg-primary/90 hover:bg-primary py-1 text-white" href="#">Pukul :
                                        {{ $item->created_at->format('H:s') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
        <!-- right -->
        @forelse ($productIn as $item)
            <div class="text-start">
                <div class="absolute start-10 mt-6 -translate-x-1/2 rtl:translate-x-1/2 md:start-1/2">
                    <div class="relative">
                        <div
                            class="text-info flex h-6 w-6 items-center justify-center rounded-full bg-white dark:bg-gray-700">
                            <i class="uil uil-record-audio"></i>
                        </div>
                        <div class="absolute -end-6 top-3 -z-10 h-[2px] w-12 bg-gray-400"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="col-span-2 md:col-start-2">
                        <div class="flex items-start gap-6">
                            <div class="ms-20 mt-4 md:ms-10">
                                <h2
                                    class="bg-primary/20 text-primary flex h-9 w-9 items-center justify-center rounded-full">
                                    {{ $item->created_at->format('d') }}
                                </h2>
                                <p class="pt-2 text-center">{{ $item->created_at->format('M') }}</p>
                            </div>
                            <div class="relative me-5">
                                <div class="card p-5">
                                    <h4 class="mb-1.5 text-base dark:text-gray-300">Produk Masuk</h4>
                                    <p class="mb-4 text-gray-500 dark:text-gray-400">{{ $item->products_name }} Dikirim Oleh
                                        {{ $item->suplier->suplier }} diterima oleh admin {{ $item->user->name }}</p>
                                    <a class="btn bg-primary/90 hover:bg-primary py-1 text-white" href="#">Pukul :
                                        {{ $item->created_at->format('H:s') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse

    </div>
@endsection

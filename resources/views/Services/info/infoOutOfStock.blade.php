@extends('Layouts.base')
@section('content')
    <div class="mt-6 space-y-7">
        @if (!$stockAlmostOut->isEmpty())
            <div class="bg-danger/10 text-danger border-danger/20 flex items-center justify-between rounded border px-5 py-3 text-sm"
                id="dismiss-example-success">
                <p>
                    <span class="font-bold">Segera Hubungi Suplier terkait Stok!</span>
                </p>
                <button class="text-xl/[0]" data-hs-remove-element="#dismiss-example-success" type="button">
                    <i class="uil uil-multiply text-xl"></i>
                </button>
            </div>
            <div>
                Klik Barang yang ingin direstock
            </div>
        @endif
        <div>
            @forelse ($stockAlmostOut as $item)
                <a href="{{ route('Edit Data',['id'=>$item->id]) }}">
                    <div class="card divide-y dark:divide-gray-600">
                        <div
                            class="group relative cursor-pointer overflow-hidden px-4 py-3 transition-all duration-500 hover:shadow-lg">
                            <div class="flex h-full items-center">
                                <i class="fill-success/20 stroke-success me-4 h-6 w-6" data-lucide="package-plus"></i>
                                <div class="grid flex-grow grid-cols-2 font-medium">
                                    <div class="col-span-10 sm:col-span-5 xl:col-span-4 2xl:col-span-2">
                                        <h1 class="font-bold text-gray-500 dark:text-gray-300">{{ $item->products_name }}
                                        </h1>
                                    </div>
                                    <div class="sm:col-span-5 sm:block xl:col-span-6 2xl:col-span-8">
                                        <div class="overflow-hidden">
                                            <a class="text-gray-500 dark:text-gray-300" href="#">Hubungi Suplier
                                                <span class="font-semibold">
                                                    {{ optional($item->suplier)->suplier ?? 'tidak tersedia' }}
                                                </span></a>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-5 sm:block xl:col-span-6 2xl:col-span-8">
                                        <div class="overflow-hidden">
                                            <a class="text-gray-500 dark:text-gray-300" href="#">
                                                <span class="font-semibold">Sisa Stok : {{ $item->quantity }}</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Email Time -->
                                <div class="whitespace-nowrap sm:block">
                                    <div class="flex text-gray-500 dark:text-gray-400">
                                        <i class="fill-dark/20 stroke-dark me-4 h-6 w-6" data-lucide="phone"></i>
                                        <h1> {{ optional($item->suplier)->phone_number ?? 'Suplier tidak tersedia' }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div>
                    <div class="mt-3 flex flex-col items-center text-center font-bold uppercase" colspan="5">
                        <img alt="empty" class="w-80" src="{{ asset('assets/images/empty.png') }}">
                        No Data
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

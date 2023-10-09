@extends('Layouts.base')
@section('content')
    <div class="mt-6 space-y-7">
        <div class="bg-danger/10 text-danger border-danger/20 flex items-center justify-between rounded border px-5 py-3 text-sm"
            id="dismiss-example-success">
            <p>
                <span class="font-bold">Segera Hubungi Suplier terkait Stok!
            </p>
            <button class="text-xl/[0]" data-hs-remove-element="#dismiss-example-success" type="button">
                <i class="uil uil-multiply text-xl"></i>
            </button>
        </div>

        <div>
            @forelse ($stockAlmostOut as $item)
                <div class="card divide-y dark:divide-gray-600">
                    <div
                        class="group relative cursor-pointer overflow-hidden px-4 py-3 transition-all duration-500 hover:shadow-lg">
                        <div class="flex h-full items-center">
                            <h1 class="me-4 h-10 w-10 text-center">{{ $loop->iteration }}</h1>
                            <div class="grid flex-grow grid-cols-2 font-medium">
                                <div class="col-span-10 sm:col-span-5 xl:col-span-4 2xl:col-span-2">
                                    <a class="text-gray-500 dark:text-gray-300"
                                        href="#">{{ $item->products_name }}</a>
                                </div>
                                <div class="sm:col-span-5 sm:block xl:col-span-6 2xl:col-span-8">
                                    <div class="overflow-hidden">
                                        <a class="text-gray-500 dark:text-gray-300" href="#">Hubungi Suplier
                                            <span class="font-semibold">{{ $item->suplier->suplier }}</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Email Time -->
                            <div class="whitespace-nowrap sm:block">
                                <div class="text-gray-500 dark:text-gray-400 flex">
                                    <i class="fill-dark/20 stroke-dark me-4 h-6 w-6" data-lucide="phone"></i>
                                    <h1>{{ $item->suplier->phone_number }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection

@extends('Layouts.base')
@section('content')
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12 xl:grid-cols-12">
        <div class="lg:col-span-5 xl:col-span-3">
            <div class="card mb-6 p-6 text-center ">
                        <img alt="" class="mx-auto h-20 rounded-full bg-gray-100 p-1 dark:bg-gray-700"
                        src="{{ asset('assets/images/profile/' . (Auth::user()->gender == 'p' ? 'female.jpg' : 'male.jpg')) }}">
                <h4 class="mb-1 mt-3 text-lg dark:text-gray-300">{{ Auth::user()->name }}</h4>
                <p class="mb-4 text-gray-400 dark:text-gray-400">Admin</p>
                <hr class="mt-5 dark:border-gray-600">
                <div class="mt-6 text-start">
                    <div class="space-y-7" x-data="{ open: false }">
                        <p class="text-zinc-400 dark:text-gray-400"><strong>Email :</strong> <span
                                class="ms-2">{{ Auth::user()->email }}</span></p>
                        <p class="text-zinc-400 dark:text-gray-400"><strong>No. Hp :</strong> <span class="ms-2">{{ Auth::user()->phone_number }}</span></p>
                        <p class="flex items-start gap-1 text-zinc-400 dark:text-gray-400"><strong
                                class="flex-shrink">Address: </strong> <span class="ms2">{{ Auth::user()->address }}</span>
                        </p>
                    </div>
                </div>
                <hr class="my-5 dark:border-gray-600">
            </div> <!-- end card -->
        </div>

        <div class="lg:col-span-7 xl:col-span-9">
            <div class="card">
                <div class="p-6">

                    <div class="flex items-center justify-between">
                        <h4 class="mb-1 uppercase dark:text-gray-300">Profile</h4>
                    </div> <!-- card-title end -->

                    <div class="pt-5">
                        <nav aria-label="Tabs"
                            class="flex flex-wrap items-center justify-around space-x-3 rounded bg-gray-100 p-2 dark:bg-gray-900/30 sm:flex-nowrap"
                            role="tablist">
                            <button aria-controls="basic-tabs-1"
                                class="hs-tab-active:font-semibold hs-tab-active:bg-white dark:hs-tab-active:bg-gray-700 active -mb-px flex w-full items-center justify-center gap-2 whitespace-nowrap rounded border-b-2 border-transparent py-2 text-sm text-gray-500 transition-all dark:text-white"
                                data-hs-tab="#basic-tabs-1" id="basic-tabs-item-1" role="tab" type="button">
                                Aktifitas
                            </button> <!-- button-end -->
                            <button aria-controls="basic-tabs-2"
                                class="hs-tab-active:font-semibold hs-tab-active:bg-white dark:hs-tab-active:bg-gray-700 -mb-px flex w-full items-center justify-center gap-2 whitespace-nowrap rounded border-b-2 border-transparent py-2 text-sm text-gray-500 transition-all dark:text-white"
                                data-hs-tab="#basic-tabs-2" id="basic-tabs-item-2" role="tab" type="button">
                                Profil Gudang
                            </button> <!-- button-end -->
                        </nav> <!-- nav-end -->
                        <div class="mt-3 overflow-hidden">
                            <div aria-labelledby="basic-tabs-item-1" class="active transform transition-all duration-300"
                                id="basic-tabs-1" role="tabpanel">
                                <div class="space-y-7">
                                    <div class="relative overflow-hidden">
                                        <!-- Center Border Line -->
                                        <div
                                            class="absolute start-10 top-20 -z-10 h-full border border-s-2 border-gray-300 dark:border-white/10">
                                        </div>

                                        <div class="mb-5 mt-5 md:text-start">
                                            <h5 class="inline rounded bg-white px-2 dark:bg-gray-700 dark:text-gray-300">
                                                Barang Masuk oleh admin {{ Auth::user()->name }}
                                            </h5>
                                        </div>
                                        @forelse ($productIn as $item)
                                            <div class="space-y-4">
                                                <div class="text-start">
                                                    <div class="absolute start-7 mt-7">
                                                        <div class="relative">
                                                            <div
                                                                class="text-info flex h-6 w-6 items-center justify-center rounded-full bg-white dark:bg-gray-800">
                                                                <i class="uil uil-record-audio"></i>
                                                            </div>
                                                            <div
                                                                class="absolute -end-6 top-3 -z-10 h-[2px] w-12 bg-gray-400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-1">
                                                        <div class="col-span-2 md:col-start-1">
                                                            <div
                                                                class="ms-10 mt-5 flex flex-wrap items-center gap-6 md:mt-0 md:flex-nowrap">
                                                                <div class="ms-10">
                                                                    @php
                                                                        $recentDate = $item->updated_at > $item->created_at ? $item->updated_at : $item->created_at;
                                                                    @endphp
                                                                    <h2
                                                                        class="bg-primary/20 text-primary flex items-center justify-center rounded p-2">
                                                                        {{ date('D, d-m-Y', strtotime($recentDate)) }}
                                                                        <br>{{ date('H:i', strtotime($recentDate)) }}
                                                                    </h2>
                                                                </div>
                                                                <div class="relative me-5 ps-10 md:ps-0">
                                                                    <div class="pt-3">
                                                                        <h4 class="mb-1.5 text-base dark:text-gray-300">
                                                                            {{ $item->quantity . ' ' . $item->products_name }}
                                                                        </h4>
                                                                        <p class="mb-4 text-gray-500 dark:text-gray-400">
                                                                            Menerima barang dari suplier <span
                                                                                class="font-bold">{{ optional($item->suplier)->suplier ?? ' Data Suplier Terhapus' }}</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            {{ Auth::user()->name }} Belum Melayani Barang Masuk
                                        @endforelse
                                    </div>
                                </div>
                                <div class="space-y-7">
                                    <div class="relative overflow-hidden">
                                        <!-- Center Border Line -->
                                        <div
                                            class="absolute start-10 top-20 -z-10 h-full border border-s-2 border-gray-300 dark:border-white/10">
                                        </div>

                                        <div class="mb-5 mt-5 md:text-start">
                                            <h5 class="inline rounded bg-white px-2 dark:bg-gray-700 dark:text-gray-300">
                                                Barang Keluar oleh admin {{ Auth::user()->name }}
                                            </h5>
                                        </div>

                                        @forelse ($productOut as $item)
                                            <div class="space-y-4">
                                                <div class="text-start">
                                                    <div class="absolute start-7 mt-7">
                                                        <div class="relative">
                                                            <div
                                                                class="text-info flex h-6 w-6 items-center justify-center rounded-full bg-white dark:bg-gray-800">
                                                                <i class="uil uil-record-audio"></i>
                                                            </div>
                                                            <div
                                                                class="absolute -end-6 top-3 -z-10 h-[2px] w-12 bg-gray-400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-1">
                                                        <div class="col-span-2 md:col-start-1">
                                                            <div
                                                                class="ms-10 mt-5 flex flex-wrap items-center gap-6 md:mt-0 md:flex-nowrap">
                                                                <div class="ms-10">
                                                                    <h2
                                                                        class="bg-primary/20 text-primary flex items-center justify-center rounded p-2">
                                                                        {{ date('D, d-m-Y', strtotime($item->created_at)) }}
                                                                        <br>{{ date('H:i', strtotime($item->created_at)) }}
                                                                    </h2>
                                                                </div>
                                                                <div class="relative me-5 ps-10 md:ps-0">
                                                                    <div class="pt-3">
                                                                        <h4 class="mb-1.5 text-base dark:text-gray-300">
                                                                            {{ $item->amount_out . ' ' . $item->product->products_name }}
                                                                        </h4>
                                                                        <p class="mb-4 text-gray-500 dark:text-gray-400">
                                                                            Mengirim barang ke <span
                                                                                class="font-bold">{{ $item->picker }}</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            {{ Auth::user()->name }} Belum Melayani Barang Masuk
                                        @endforelse
                                    </div>
                                </div>
                            </div> <!-- tabs-with-underline-1 end -->
                            <div aria-labelledby="basic-tabs-item-2" class="hidden transform transition-all duration-300"
                                id="basic-tabs-2" role="tabpanel">
                                <div class="divide-y dark:divide-gray-600">
                                    <div class="relative overflow-hidden py-2.5">
                                        <form action="{{ route('editWhName') }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            @foreach ($whProfile as $item)
                                                <div class="mb-3 w-full">
                                                    <label class="mb-2 block font-semibold" for="example-email">Nama
                                                        Gudang</label>
                                                    <input class="form-input w-full" name="id" type="hidden"
                                                        value="{{ $item->id }}">
                                                    <div class="flex">
                                                        <input @error('whName') style="border: 1px solid red" @enderror
                                                            class="form-input w-full" name="whName"
                                                            placeholder="Cth: CV. Kelaras" type="text"
                                                            value="{{ $item->warehouse_name }}">
                                                        <button class="btn bg-primary btn-sm rounded text-white"
                                                            type="submit">Kirim</button>
                                                    </div>
                                                    <small>Silahkan ubah nama gudang di sini</small>
                                                    @error('whName')
                                                        <small class="text-red-600">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            @endforeach
                                        </form>
                                    </div>
                                </div>
                                {{-- <div class="text-center">
                                    <a class="btn bg-primary btn-sm rounded text-white" href="#">Load more</a>
                                </div> --}}
                            </div> <!-- tabs-with-underline-2 end -->


                        </div> <!-- tab-end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

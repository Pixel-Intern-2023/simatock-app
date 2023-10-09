@extends('Layouts.base')
@section('content')
    <!-- activities -->
    <div class="card">
        <div class="p-6">
            <div class="mb-5 flex items-start justify-between gap-5">
                <h6 class="uppercase dark:text-gray-300">Admin</h6>
            </div>

            <div class="space-y-8">
                @forelse ($listAdmin as $item)
                <div class="flex gap-3">
                    <img alt="shreyu" class="h-12 rounded-full" src="{{ asset('assets/images/profile/' . ($item->gender == 'p' ? 'female.jpg' : 'male.jpg')) }}">
                    <div class="flex-grow">
                        <h6 class="mb-1 mt-0 text-gray-500 dark:text-gray-300">
                            <a class="text-primary" href="#">Admin {{ $item->name }}</a>
                        </h6>
                        <span class="block font-semibold">Email : {{ $item->email }}</span>
                        <span class="block font-semibold">No. Telp :{{ $item->phone_number }}</span>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection

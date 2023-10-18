@extends('Layouts.base')
@section('content')
<div class="grid xl:grid-cols-4 md:grid-cols-2 gap-5">
    @foreach ($listAdmin as $admin)
    <div>
        <div class="card">
            <div class="p-6">
                <div class="gap-5" style="display:flex; flex-direction: column; justify-content: center; align-items:center;"  >
                    <img src="{{ asset('assets/images/profile/' . ($admin->gender == 'p' ? 'female.jpg' : 'male.jpg')) }}" class="h-20 rounded-full" alt="shreyu">
                    <div class="flex-grow">
                        <h4 class="text-lg mt-2 mb-0 dark:text-gray-300">{{ $admin->name }}</h4>
                        <h6 class="text-gray-500 font-normal mt-1 mb-4 dark:text-gray-400">admin</h6>
                    </div>
                </div>
                <div class="mt-1 pt-2 border-t text-start dark:border-gray-600">
                    <label for="">Email :</label>
                    <p class="text-gray-500 mb-2 dark:text-gray-400">{{ $admin->email }}</p>
                    <label for="">No Telp :</label>
                    <p class="text-gray-500 mb-2 dark:text-gray-400">{{ $admin->phone_number }}</p>
                    <label for="">Alamat : </label>
                    <p class="text-gray-500 mb-2 dark:text-gray-400">{{ $admin->address }}</p>
                </div>
                <div class="flex items-center gap-5 mt-10">
                    <div class="w-full">
                        <a href="{{ route('Aktifitas Admin', ['id' => $admin->id]) }}" type="button" class="btn btn-sm w-full bg-primary/90 text-white hover:bg-primary me-1">Lihat Aktifitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-2 lg:flex">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $category->name }}
    </h2>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="md:col-span-3">
                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-4">
                            <x-article :posts="$posts" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

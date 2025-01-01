@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-2 lg:flex">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Category Edit') }}
    </h2>
</div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('categories.update', $category) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <div>
                                <label for="name">Name:</label>
                            </div>
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $category->name)" required autofocus autocomplete="name" />
                        </div>
                        <div>
                            <button type="submit" class="mt-4 rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

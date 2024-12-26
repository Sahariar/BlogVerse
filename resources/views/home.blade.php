@extends('layouts.app')

@section('content')
<section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          Understand User Flow.
          <strong class="font-extrabold text-teal-700 sm:block"> Increase Conversion. </strong>
        </h1>

        <p class="mt-4 sm:text-xl/relaxed">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
          numquam ea!
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-teal-700 focus:outline-none focus:ring active:bg-teal-500 sm:w-auto"
            href="#"
          >
            Get Started
          </a>

          <a
            class="block w-full rounded px-12 py-3 text-sm font-medium text-teal-600 shadow hover:text-teal-700 focus:outline-none focus:ring active:text-teal-500 sm:w-auto"
            href="#"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>
  {{-- blog and sidebar --}}
  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-8">
        <div class="md:col-span-1 bg-slate-100 p-10">
          <div class="max-w-lg md:max-w-none">
            <ul class="list-unstyled mb-0">
                @foreach($categories as $category)
                    <li><a href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="md:col-span-3">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-4">
                <x-article :posts="$posts" />
              </div>
        </div>
      </div>
    </div>
  </section>


@endsection

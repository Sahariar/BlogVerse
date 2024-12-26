@extends('layouts.app')

@section('content')
<section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-2/3 lg:items-center">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          <strong class="font-extrabold text-teal-700 sm:block"> {{ $post->title }} </strong>
        </h1>

        <time datetime="2022-10-10" class="block text-xs py-5"> {{ $post->updated_at }} </time>

      <h4 class="text-3xl font-extrabold  sm:text-5xl text-teal-700">
        {{ $post->category_id }}
      </h4>
      </div>
    </div>
  </section>

<section>
  <div
    class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:h-2/3 lg:items-center"
  >
    <div class="mx-auto max-w-xl text-center">
      <p>
        {{ $post->content }}
      </p>
    </div>
  </div>
</section>

@endsection

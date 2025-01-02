@extends('layouts.app')

@section('content')
    <section class="bg-gray-50 relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
        <img
        alt=""
        src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
        class="absolute inset-0 h-full w-full object-cover"
      />
      <div class="relative bg-gradient-to-t from-teal-900/50 to-teal-900/25 py-32 min-h-64">
        <div class="p-4 sm:p-6 text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                <strong class="font-extrabold text-white sm:block"> {{ $post->title }} </strong>
            </h1>
            <time datetime="2022-10-10" class="block text-xs py-5 text-white"> {{ $post->updated_at }} </time>
            <h4 class="text-3xl font-extrabold  sm:text-5xl text-white">
                {{ $post->category_id }}
            </h4>
        </div>
      </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:h-2/3 lg:items-center">
            <div class="mx-auto max-w-xl text-center">
                <p>
                    {{ $post->content }}
                </p>
            </div>
        </div>
    </section>
@endsection

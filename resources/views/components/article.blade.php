@foreach($posts as $post)
<article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
    <img
      alt=""
      src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
      class="absolute inset-0 h-full w-full object-cover"
    />

    <div class="relative bg-gradient-to-t from-teal-900/50 to-teal-900/25 pt-32 sm:pt-48 lg:pt-64">
      <div class="p-4 sm:p-6">
        <time datetime="2022-10-10" class="block text-xs text-white/90"> {{ $post->updated_at }} </time>

        <a href="{{ route('home') }}/posts/{{ $post->id }}">
          <h3 class="mt-0.5 text-lg text-white">{{ $post->title }}</h3>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
            {{ $post->content }}
        </p>
      </div>
    </div>
  </article>
  @endforeach

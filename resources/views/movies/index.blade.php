<x-app-layout>
    <div class="bg-gray-800">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="lg:text-center">
      <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-red-200 sm:text-4xl">Movies</h2>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">My favourite Movies (and lorem ipsum seeds)</p>
    </div>

    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 mt-6">
      @foreach ($movies as $movie)
      <a href="/movies/{{ $movie->id }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            @if ($movie->img_path)
            <img src="{{ $movie->img_path }}" alt="{{ $movie->title }}, poster" class="w-full h-full object-center object-cover group-hover:opacity-75">
            @else
            <img src="/images/movie-template.jpg" alt="Example image" class="w-full h-full object-center object-cover group-hover:opacity-75">
            @endif
        </div>
        <h3 class="mt-4 text-lg text-white">
          {{ $movie->title }}
        </h3>
        <p class="mt-1 text-sm font-medium text-white">
          {{ $movie->movie_genres }}
        </p>
      </a>
      @endforeach
    </div>
    
  </div>
  <div>
      
  </div>
  <div class="px-16 py-6 bg-gray-300">
      {{ $movies->links() }}
  </div>
</div>
    
</x-app-layout>

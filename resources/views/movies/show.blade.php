<x-app-layout>
    <section class="text-white body-font overflow-hidden bg-gray-800">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                @if ($movie->img_path)
                    <img alt="poster" class="lg:w-1/2 w-full lg:h-auto object-cover object-center rounded" src="{{ $movie->img_path }}">
                @else
                    <img alt="poster example" class="lg:w-1/2 w-full lg:h-auto object-cover object-center rounded" src="/images/movie-template.jpg">
                @endif
            
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h1 class="text-white text-3xl title-font font-medium mb-1">{{ $movie->title }}</h1>
                <div class="flex mb-4">
                <!-- When i have time to add review functionality 
                    <span class="flex items-center">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                    </svg>
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                    </svg>
                    <span class="text-gray-600 ml-3">My Opinion</span>
                </span> -->
                </div>
                <p class="leading-relaxed">{{ $movie->description }}</p>
                
                @if ($movie->trailer_path)
                    <a href="{{ $movie->trailer_path }}"><img alt="youtube link" class="h-10" src="/images/youtubelogo.svg"></a>
                @endif
            
                <div class="mt-10">
                    <h3 class="text-sm font-medium text-white">Details</h3>

                    <div class="mt-4">
                        <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                        <li class="text-white"><span class="text-white"><b>Actors:</b> {{ $movie->actors }}</span></li>

                        <li class="text-white"><span class="text-white"><b>Language:</b> {{ $movie->language }}</span></li>

                        <li class="text-white"><span class="text-white"><b>Genres:</b> {{ $movie->movie_genres }}</span></li>

                        <li class="text-white"><span class="text-white"><b>Released:</b> {{ $movie->release_date }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
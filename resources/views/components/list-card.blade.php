@props(['listing'])

<x-card>
    <div class="flex">
        <img class="mr-6 hidden w-48 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/search/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            id = {{ $listing->id }}
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
            <ul class="flex">
                <li class="mr-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">Laravel</a>
                </li>
                <li class="mr-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">API</a>
                </li>
                <li class="mr-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">Backend</a>
                </li>
                <li class="mr-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>

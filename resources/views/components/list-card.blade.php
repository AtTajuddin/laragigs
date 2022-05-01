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
            <x-list-tags :csvTags="$listing->tags" />
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
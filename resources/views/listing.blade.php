<x-layout>
    @include('partial._search')
    {{-- <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">
        <h3 class="text-2xl text-pink-500">SINGLE LISTING </h3>
        <h5> Nomor : {{ $listing['id'] }} </h5>
        <h1 class="to-amber-600 text-5xl">{{ $listing['title'] }}</h1>
        <p>{{ $listing['description'] }}</p>
    </div> --}}

    <a href="/" class="ml-4 mb-4 inline-block text-black"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class='p-20'>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="mr-6 mb-6 w-48" src="{{ asset('images/no-image.png') }}" alt="" />
                <h3 class="mb-2 text-2xl">{{ $listing->title }}</h3>
                <div class="mb-4 text-xl font-bold">{{ $listing->commpany }}</div>

                <x-list-tags :csvTags="$listing->tags" />

                <div class="my-4 text-lg">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="mb-6 w-full border border-gray-200"></div>
                <div>
                    <h3 class="mb-4 text-3xl font-bold">
                        Job Description
                    </h3>
                    <div class="space-y-6 text-lg">
                        {{ $listing->description }}

                        <a href="mailto:{{ $listing->email }}"
                            class="bg-laravel mt-6 block rounded-xl py-2 text-white hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="{{ $listing->website }}" target="_blank"
                            class="block rounded-xl bg-black py-2 text-white hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>

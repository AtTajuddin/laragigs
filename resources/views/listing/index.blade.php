<x-layout>
    @include('partial._hero')
    @include('partial._search')
    <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">
        @unless(count($listings) == 0)
            @foreach ($listings as $listing)
                {{-- <h5> Nomor : {{ $listing['id'] }} </h5>
                <h1><a href="/search/{{ $listing['id'] }}"> {{ $listing['title'] }}</a></h1>
                <p>{{ $listing['description'] }}</p> --}}

                <x-list-card :listing='$listing' />
            @endforeach
        @else
            <h1>No Listings</h1>
        @endunless
    </div>
    <div class="mt-6 p-10">
        {{ $listings->links() }}
    </div>
</x-layout>

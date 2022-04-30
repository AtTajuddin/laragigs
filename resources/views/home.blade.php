{{ $heading }}
<h1>Home</h1>
@unless($listings == 0)
    @foreach ($listings as $listing)
        <h5> Nomor : {{ $listing['id'] }} </h5>
        <h1><a href="/search/{{ $listing['id'] }}"> {{ $listing['title'] }}</a></h1>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@else
    <h1>No Listings</h1>
@endunless

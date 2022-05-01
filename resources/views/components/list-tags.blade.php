@props(['csvTags'])

@php
$tags = explode(',', $csvTags);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="mr-2 rounded-xl bg-black px-3 py-1 text-white">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>

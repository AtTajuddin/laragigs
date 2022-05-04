@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="transform-translate-x-/2 bg-laravel fixed top-0 left-1/2 px-8 py-3 text-white">
        {{-- <p>ini kesuksesan yag melanda diri anda</p> --}}
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif

<x-layout>
    <div class="mx-4">
        <x-card class="mx-auto mt-24 max-w-lg rounded border border-gray-200 bg-amber-100 p-10">
            <header class="text-center">
                <h2 class="mb-1 text-2xl font-bold uppercase">
                    Login
                </h2>
                <p class="mb-4">Log into your Account to post gigss</p>
            </header>

            <form action="/users/authenticate" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="mb-2 inline-block text-lg">Email</label>
                    <input type="email" class="w-full rounded border border-green-600 p-2" name="email"
                        value="{{ old('email') }}" />
                    @Error('email')
                        <p class="mt-1 text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="mb-2 inline-block text-lg">
                        Password
                    </label>
                    <input type="password" class="w-full rounded border border-gray-200 p-2" name="password"
                        value="{{ old('password') }}" />
                    @Error('password')
                        <p class="mt-1 text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-laravel rounded py-2 px-4 text-white hover:bg-black">
                        Login
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Don't have an account?
                        <a href="/register" class="text-laravel">Register</a>
                    </p>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>

<div class="w-full h-screen grid grid-cols-1 lg:grid-cols-2 p-8">
    <aside class="hidden lg:block rounded-lg overflow-hidden">
        <img
            src="{{ \Illuminate\Support\Facades\Vite::asset('resources/assets/static/cactus.jpg') }}"
            alt=""
            class="w-full h-full object-cover object-center"
        >
    </aside>
    <main class="w-full h-full flex flex-col items-center justify-center gap-8">
        <div class="w-full max-w-xs flex flex-col items-center justify-center gap-8">
            <header class="flex flex-col items-center justify-center gap-2">
                <h1 class="font-bold text-lg text-green-500">
                    Welcome back
                </h1>
                <p class="text-sm text-gray-500">
                    Enter your credentials to see your <span class="font-bold text-green-500">Cactus</span> dashboard
                </p>
            </header>

            <form action="#" wire:submit.prevent="submit" class="flex flex-col gap-4 w-full">
                <div class="flex flex-col text-gray-700">
                    <label for="input-email">
                        Email <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="input-email"
                        wire:model="email"
                        placeholder="Enter your email"
                        class="appearance-none outline-none px-4 py-2 border border-gray-200 rounded bg-gray-100
                        placeholder:text-gray-500 hover:border-green-300 focus:border-green-500 transition-all duration-700"
                    >
                    @error('email')
                    <div class="p-1">
                        <p class="text-rose-500 text-sm">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="flex flex-col text-gray-700">
                    <label for="input-password">
                        Password <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="password"
                        id="input-password"
                        wire:model="password"
                        placeholder="Enter your password"
                        class="appearance-none outline-none px-4 py-2 border border-gray-200 rounded bg-gray-100
                        placeholder:text-gray-500 hover:border-green-300 focus:border-green-500 transition-all duration-700"
                    >
                    @error('password')
                    <div class="p-1">
                        <p class="text-rose-500 text-sm">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('register') }}" class="text-green-500">
                        Are you new?
                    </a>

                    <button
                        type="submit"
                        class="px-4 py-2 rounded font-bold text-white bg-green-500 shadow-lg shadow-green-500/50
                        hover:shadow-sm transition-all duration-700 hover:bg-green-600"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

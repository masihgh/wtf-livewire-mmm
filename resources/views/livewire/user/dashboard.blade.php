<div class="w-full h-screen flex flex-col items-center justify-center gap-4">
    <h1 class="text-gray-600 text-xl">
        Welcome <span class="text-green-500 font-bold">{{ auth()->user()->name }}</span>
    </h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="bg-red-500 font-bold text-white shadow-lg px-4 py-2 rounded shadow-red-500/50 hover:shadow-sm hover:bg-red-600 transition-all duration-700">
            Logout
        </button>
    </form>
</div>

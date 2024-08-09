<x-app-layout>
    <div class="max-w-md mx-auto p-6 bg-[#FF2D20]/10 rounded-lg shadow-lg">

        <div>Hello {{$username}}!</div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="flex justify-end">
                <button type="submit"
                        class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Logout
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

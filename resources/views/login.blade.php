<x-app-layout>
    <div class="max-w-md mx-auto p-6 bg-[#FF2D20]/10 rounded-lg shadow-lg">
        <div>
            <h2 class="text-center text-3xl font-extrabold text-gray-900">Sign In</h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('sign-in') }}" method="POST">
            @csrf

            <div class="space-y-4">
                <div class="mt-3">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email-address" name="email" type="email" autocomplete="email"
                           class="appearance-none rounded-md block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Email">
                </div>
                <div class="mt-3">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password"
                           class="appearance-none rounded-md block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Password">
                </div>
            </div>

            <div class="text-center text-gray-900">
                Already have an account? <a href="{{ route('registration.index') }}" style="color: #4673e5">Sign in!</a>
            </div>

            <div>
                <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign In
                </button>
            </div>
        </form>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
</x-app-layout>
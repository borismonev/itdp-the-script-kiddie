<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Public Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium">This is a public page</h3>
                    <p class="mt-2">Anyone can access this page without authentication.</p>

                    @auth
                        <p class="mt-4 text-green-600">You are logged in as: {{ Auth::user()->name }}</p>
                        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">Go to Dashboard</a>
                    @else
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="text-blue-600 hover:underline mr-4">Login</a>
                            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

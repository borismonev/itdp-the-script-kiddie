<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Members Only') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-purple-600">👥 Members Only Area</h3>
                    <p class="mt-2">Another protected page - authentication required!</p>
                    <p class="mt-2">Hello {{ Auth::user()->name }}, you have exclusive access here.</p>

                    <div class="mt-4 space-y-2">
                        <p><strong>Your Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Member Since:</strong> {{ Auth::user()->created_at->format('F j, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

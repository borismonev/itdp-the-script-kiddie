<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Secret Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-red-600">🔒 Secret Content</h3>
                    <p class="mt-2">This page can only be accessed by authenticated users!</p>
                    <p class="mt-2">Welcome, {{ Auth::user()->name }}!</p>

                    <div class="mt-4">
                        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline mr-4">Dashboard</a>
                        <a href="{{ route('members-only') }}" class="text-blue-600 hover:underline">Members Only</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

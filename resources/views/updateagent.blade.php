<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"> --}}
                <h1 class="text-lg font-medium text-gray-900 dark:text-gray-100">Keagenan</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lengkapi data keagenan anda.</p>
                @livewire('agent-component')
            </div>
        </div>
    </div>

</x-app-layout>

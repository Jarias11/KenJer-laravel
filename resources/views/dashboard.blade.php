<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    {{ __("You're logged in!") }}
                    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border border-blue-700">
                        Home
                    </a>
                </div>
            </div>

            <!-- Gallery Tools Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Gallery Tools') }}
                        </h3>
                        <a href="{{ route('gallery') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border border-blue-700">
                            Back to Gallery
                        </a>
                    </div>
                    <p>Manage and organize your image gallery.</p>
                    <!-- Add your gallery tools content here -->
                </div>
            </div>

            <!-- Invoices Maker Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Invoices Maker') }}
                    </h3>
                    <p>Create and manage invoices easily.</p>
                    @include('invoices.create')
                </div>
            </div>

            <!-- Estimate Maker Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Estimate Maker') }}
                    </h3>
                    <p>Create and manage estimates quickly.</p>
                    @include('estimates.create')
                    <!-- Add your estimate maker content here -->
                </div>
            </div>

            <!-- Invoice/Estimate Finder Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Invoice/Estimate Finder') }}
                    </h3>
                    <p>Find and retrieve invoices and estimates.</p>
                    <!-- Add your invoice/estimate finder content here -->
                </div>
            </div>

            <!-- Emails Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Emails') }}
                    </h3>
                    <p>Manage and send emails.</p>
                    <!-- Add your emails content here -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

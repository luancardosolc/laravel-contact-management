@extends('layouts.app')

@section('title', 'Welcome - Contacts Management System')

@section('content')
<div class="max-w-4xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
            Welcome to Contacts Management System
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 mb-12">
            Manage your contacts efficiently with our easy-to-use system
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">Manage Contacts</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Add, edit, delete and organize your contacts with our comprehensive management system.
                </p>
                <a href="{{ route('contacts.index') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                    Go to Contacts
                </a>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">Easy to Use</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Intuitive interface designed for quick and efficient contact management.
                </p>
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    Built with Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-16 text-center">
        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-8">Key Features</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
                <h4 class="font-semibold text-gray-900 dark:text-white">Add Contacts</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Quickly add new contacts</p>
            </div>
            <div class="text-center">
                <h4 class="font-semibold text-gray-900 dark:text-white">Edit Information</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Update contact details</p>
            </div>
            <div class="text-center">
                <h4 class="font-semibold text-gray-900 dark:text-white">Search & Filter</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Find contacts easily</p>
            </div>
        </div>
    </div>
</div>
@endsection

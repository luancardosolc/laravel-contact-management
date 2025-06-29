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
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">Manage Contacts</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Add, edit, delete and organize your contacts with our comprehensive management system.
                </p>
                <a href="{{ route('contacts.index') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                    Go to Contacts
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
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
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 dark:text-white">Add Contacts</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Quickly add new contacts</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 dark:text-white">Edit Information</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Update contact details</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 dark:text-white">Search & Filter</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Find contacts easily</p>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="py-20">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-10 text-gray-900 dark:text-gray-100 text-center">
                <h1 class="text-4xl font-bold mb-4">
                    Contact Management System
                </h1>
                <p class="text-lg mb-8 text-gray-600 dark:text-gray-400">
                    The simple and effective way to manage your contacts.
                </p>
                <a href="{{ route('contacts.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition-all duration-300">
                    Go to Contacts
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

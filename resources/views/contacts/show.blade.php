@extends('layouts.app')

@section('title', 'Contact Details')

@section('content')
    <div class="max-w-2xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                Contact Details
            </h1>
            <a href="{{ route('contacts.index') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg transition-colors duration-200">
                Back to List
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Name</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $contact->name }}</p>
                </div>
                <hr class="dark:border-gray-700">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Contact</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $contact->contact }}</p>
                </div>
                <hr class="dark:border-gray-700">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Email</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $contact->email }}</p>
                </div>
                <hr class="dark:border-gray-700">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Created At</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ $contact->created_at->format('M d, Y H:i') }}</p>
                </div>
                <hr class="dark:border-gray-700">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Last Updated</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ $contact->updated_at->format('M d, Y H:i') }}</p>
                </div>
            </div>
            @auth
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('contacts.edit', $contact) }}"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors duration-200">
                    Edit
                </a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors duration-200"
                        onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </div>
            @endauth
        </div>
    </div>
@endsection

@extends('admin.layout.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div class="space-y-6">
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h2 class="text-2xl font-semibold text-gray-900">
                Welcome to MusicBand Admin Panel
            </h2>
        </div>
        <div class="flex justify-start mt-6">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-red-600 px-4 py-2.5
                    text-sm font-medium text-white shadow-sm transition hover:bg-red-700 focus:outline-none focus:ring-2 
                        focus:ring-red-500 focus:ring-offset-2">
                    Logout
                </button>
            </form>
        </div>
    </div>
@endsection
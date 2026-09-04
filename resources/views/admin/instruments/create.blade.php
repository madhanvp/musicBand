@extends('admin.layout.app')

@section('title', 'Create Instrument')
@section('page-title', 'Create Instrument')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <form action="{{ route('admin.instruments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full mt-1 p-2 border rounded" required>
                @error('name')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Type</label>
                <input type="text" name="type" value="{{ old('type') }}" class="w-full mt-1 p-2 border rounded" required>
                @error('type')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" accept="image/*" class="mt-1">
                @error('image')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('admin.instruments.index') }}" class="px-4 py-2 rounded border">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">Create</button>
            </div>
        </form>
    </div>
@endsection

@extends('admin.layout.app')

@section('title', 'Instruments')
@section('page-title', 'Instruments')

@section('header-actions')
    <a href="{{ route('admin.instruments.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded">Create Instrument</a>
@endsection

@section('content')
    <div class="bg-white p-4 rounded shadow">
        @if (session('success'))
            <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <table class="w-full">
            <thead>
                <tr class="text-left">
                    <th class="p-2">ID</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Type</th>
                    <th class="p-2">Image</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($instruments as $instrument)
                    <tr class="border-t">
                        <td class="p-2">{{ $instrument->id }}</td>
                        <td class="p-2">{{ $instrument->name }}</td>
                        <td class="p-2">{{ $instrument->type }}</td>
                        <td class="p-2">
                            @if($instrument->image)
                                <img src="{{ asset('storage/' . $instrument->image) }}" class="w-16 h-16 object-cover rounded">
                            @endif
                        </td>
                        <td class="p-2">
                            <a href="{{ route('admin.instruments.edit', $instrument) }}" class="px-3 py-1 bg-yellow-400 rounded mr-2">Edit</a>

                            <form action="{{ route('admin.instruments.destroy', $instrument) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this instrument?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center text-gray-500">No instruments found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
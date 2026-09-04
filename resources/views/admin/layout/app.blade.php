<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* small utility styles for sidebar scrolling and transitions */
        .sidebar-scroll {
            height: calc(100vh - 4rem);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-100 font-sans text-gray-800">

<div class="flex">

    <!-- Sidebar -->
    <aside id="sidebar" class="hidden md:flex md:flex-col w-64 bg-white border-r">
        <div class="px-6 py-4 border-b">
            <a href="{{ Route::has('admin.dashboard') ? route('admin.dashboard') : url('/dashboard') }}" class="text-lg font-semibold text-gray-900">
                Admin Panel
            </a>
        </div>

        <nav class="px-4 py-6 overflow-y-auto sidebar-scroll">
            <ul class="space-y-2">

                <li>
                    <a href="{{ Route::has('admin.dashboard') ? route('admin.dashboard') : url('/dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-50">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M3 6h18M3 18h18"/></svg>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ Route::has('admin.instruments.index') ? route('admin.instruments.index') : url('/dashboard/instruments') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-50">
                        <svg class="w-5 h-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path d="M4 3h12v2H4V3zM4 7h12v10H4V7z"/></svg>
                        <span>Instruments</span>
                    </a>
                </li>

            </ul>
        </nav>

        <div class="mt-auto px-4 py-4 border-t">
            @if(Route::has('admin.logout'))
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-50 text-sm text-red-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7"/></svg>
                        Logout
                    </button>
                </form>
            @endif
        </div>
    </aside>

    <!-- Mobile topbar -->
    <div class="flex-1 flex flex-col">
        <header class="w-full bg-white border-b md:hidden">
            <div class="px-4 py-3 flex items-center justify-between">
                <a href="{{ Route::has('admin.dashboard') ? route('admin.dashboard') : url('/dashboard') }}" class="text-lg font-semibold">Admin</a>
                <div class="flex items-center gap-2">
                    <button id="mobileSidebarOpen" class="p-2 rounded hover:bg-gray-100" aria-label="Open menu">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile sidebar (overlay) -->
        <div id="mobileSidebar" class="fixed inset-0 z-40 hidden">
            <div class="absolute inset-0 bg-black opacity-30" id="mobileSidebarBackdrop"></div>
            <aside class="absolute left-0 top-0 bottom-0 w-64 bg-white shadow">
                <div class="px-6 py-4 border-b flex items-center justify-between">
                    <a href="{{ Route::has('admin.dashboard') ? route('admin.dashboard') : url('/dashboard') }}" class="text-lg font-semibold">Admin</a>
                    <button id="mobileSidebarClose" class="p-2 rounded hover:bg-gray-100" aria-label="Close menu">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <nav class="px-4 py-6">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ Route::has('admin.dashboard') ? route('admin.dashboard') : url('/dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-50">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route::has('admin.instruments.index') ? route('admin.instruments.index') : url('/dashboard/instruments') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-50">
                                Instruments
                            </a>
                        </li>
                        <li class="mt-4">
                            @if(Route::has('admin.logout'))
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-3 py-2 rounded hover:bg-gray-50 text-red-600">
                                        Logout
                                    </button>
                                </form>
                            @endif
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>

        <!-- Main content -->
        <main class="flex-1 p-6">
            <div class="max-w-7xl mx-auto">
                <header class="mb-6 flex items-center justify-between">
                    <h1 class="text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
                    <div class="flex items-center gap-3">
                        @yield('header-actions')
                    </div>
                </header>

                <section>
                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-50 border border-green-200 text-green-800 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @yield('content')
                </section>
            </div>
        </main>
    </div>
</div>

<script>
    // Mobile sidebar toggle
    const mobileSidebar = document.getElementById('mobileSidebar');
    const mobileSidebarBackdrop = document.getElementById('mobileSidebarBackdrop');
    const openBtn = document.getElementById('mobileSidebarOpen');
    const closeBtn = document.getElementById('mobileSidebarClose');

    function openSidebar() {
        mobileSidebar.classList.remove('hidden');
    }
    function closeSidebar() {
        mobileSidebar.classList.add('hidden');
    }

    if (openBtn) openBtn.addEventListener('click', openSidebar);
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
    if (mobileSidebarBackdrop) mobileSidebarBackdrop.addEventListener('click', closeSidebar);
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | STEPX Admin</title>
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>

<body>
    <div class="admin-wrapper">

        <aside class="admin-sidebar">
            <div class="admin-brand">
                <img src="{{ asset('images/logo.png') }}" alt="STEPX" onerror="this.style.display='none'">
                <span>STEPX <b>Admin</b></span>
            </div>

            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="admin-icon">▦</span> Dashboard
                </a>
                <a href="{{ route('admin.products.index') }}" class="admin-nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <span class="admin-icon">👟</span> Products
                </a>
                <a href="{{ url('/') }}" class="admin-nav-link" target="_blank">
                    <span class="admin-icon">🔗</span> View Site
                </a>
            </nav>

            <form action="{{ route('admin.logout') }}" method="POST" class="admin-logout-form">
                @csrf
                <button type="submit" class="admin-logout-btn">⎋ Logout</button>
            </form>
        </aside>

        <div class="admin-main">
            <header class="admin-topbar">
                <h1>@yield('page-title', 'Dashboard')</h1>
                <div class="admin-user">
                    <span>{{ auth()->user()->name ?? 'Admin' }}</span>
                </div>
            </header>

            <main class="admin-content">
                @if (session('success'))
                    <div class="admin-alert admin-alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="admin-alert admin-alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>

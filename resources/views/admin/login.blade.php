<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | STEPX</title>
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
</head>

<body class="admin-login-body">
    <div class="admin-login-box">
        <div class="admin-login-brand">STEPX <b>Admin</b></div>
        <p class="admin-login-sub">Login to manage your store</p>

        @if ($errors->any())
            <div class="admin-alert admin-alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST" class="admin-login-form">
            @csrf
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label>Password</label>
            <input type="password" name="password" required>

            <label class="admin-checkbox">
                <input type="checkbox" name="remember"> Remember me
            </label>

            <button type="submit" class="admin-btn-primary">Login</button>
        </form>

        <p class="admin-login-hint">Default admin: admin@stepx.com / admin123</p>
    </div>
</body>

</html>

<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to your Dashboard, {{ Auth::user()->name ?? 'User' }}!</h1>

    <p>You are logged in.</p>

    <!-- Link to Profile Update Page -->
    <a href="{{ route('profile.edit') }}">Edit Profile</a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>

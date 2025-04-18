<!-- resources/views/profile/edit.blade.php -->
<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Display validation errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Nickname -->
    <input type="text" name="nickname" value="{{ old('nickname', $user->nickname) }}" placeholder="Nickname">

    <!-- Avatar (file upload) -->
    <div>
        @if ($user->avatar)
            <img src="{{ Storage::url($user->avatar) }}" alt="Avatar" style="width: 100px; height: 100px;">
        @endif
        <input type="file" name="avatar">
    </div>

    <!-- Email -->
    <input type="email" name="email" value="{{ old('email', $user->email) }}">

    <!-- Password -->
    <input type="password" name="password" placeholder="New Password">
    <input type="password" name="password_confirmation" placeholder="Confirm Password">

    <!-- Phone -->
    <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Phone Number">

    <!-- City -->
    <input type="text" name="city" value="{{ old('city', $user->city) }}" placeholder="City">

    <button type="submit">Update Profile</button>
</form>

<!-- Delete Account -->
<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</button>
</form>

<!-- Link to Dashboard Page -->
<a href="{{ route('dashboard') }}">Back to Dashboard</a>

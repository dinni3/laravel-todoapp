<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password">
        @error('password')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation">
    </div>

    <button type="submit">Register</button>
</form>

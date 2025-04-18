<form method="POST" action="{{ route('login') }}">
    @csrf

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

    <button type="submit">Login</button>
</form>


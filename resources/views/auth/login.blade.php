<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label>email:</label>
        <input type="text" name="email" value="{{ old('email') }}" required autofocus>
        @error('email') <span>{{ $message }}</span> @enderror
    </div>

    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
        @error('password') <span>{{ $message }}</span> @enderror
    </div>

    <button type="submit">Login</button>
</form>

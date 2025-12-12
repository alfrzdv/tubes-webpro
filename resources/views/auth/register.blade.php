<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .container { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { margin-bottom: 1.5rem; color: #333; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; color: #555; }
        input { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; }
        input:focus { outline: none; border-color: #4CAF50; }
        .error { color: red; font-size: 0.875rem; margin-top: 0.25rem; }
        button { width: 100%; padding: 0.75rem; background: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer; }
        button:hover { background: #45a049; }
        .login-link { text-align: center; margin-top: 1rem; }
        select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            background: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrasi</h2>
        
        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 0.75rem; border-radius: 4px; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-group">
            <label for="role">Daftar Sebagai</label>
            <select id="role" name="role" required>
                <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('role')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit">Daftar</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="/login">Login di sini</a>
        </div>
    </div>
</body>
</html>
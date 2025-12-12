<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #667eea;
        }
        
        .navbar-user {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-info {
            text-align: right;
        }
        
        .user-name {
            font-weight: 600;
            color: #333;
        }
        
        .user-email {
            font-size: 0.875rem;
            color: #666;
        }
        
        .btn-logout {
            background: #f44336;
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.95rem;
            transition: background 0.3s;
        }
        
        .btn-logout:hover {
            background: #d32f2f;
        }
        
        .container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }
        
        .hero {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .hero h1 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }
        
        .hero p {
            color: #666;
            font-size: 1.2rem;
            line-height: 1.6;
        }
        
        .welcome-text {
            color: #667eea;
            font-weight: 600;
        }
        
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .card h3 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .card p {
            color: #666;
            line-height: 1.6;
        }
        
        .btn-primary {
            background: #667eea;
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1rem;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary:hover {
            background: #5568d3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">MyApp</div>
        <div class="navbar-user">
            <div class="user-info">
                <div class="user-name">{{ $user->name }}</div>
                <div class="user-email">{{ $user->email }}</div>
            </div>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="hero">
            <h1>Selamat Datang, <span class="welcome-text">{{ $user->name }}</span>! 🎉</h1>
            <p>Anda berhasil login ke sistem. Selamat menjelajahi fitur-fitur yang tersedia.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>📊 Dashboard</h3>
                <p>Lihat statistik dan informasi penting Anda di sini.</p>
                <a href="#" class="btn-primary">Buka Dashboard</a>
            </div>

            <div class="card">
                <h3>👤 Profile</h3>
                <p>Kelola informasi profil dan pengaturan akun Anda.</p>
                <a href="#" class="btn-primary">Edit Profile</a>
            </div>

            <div class="card">
                <h3>⚙️ Settings</h3>
                <p>Atur preferensi dan konfigurasi aplikasi Anda.</p>
                <a href="#" class="btn-primary">Pengaturan</a>
            </div>
        </div>
    </div>
</body>
</html>
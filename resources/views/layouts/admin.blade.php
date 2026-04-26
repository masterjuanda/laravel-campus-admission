    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin | Universitas MBP 2</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

        <style>
            /* CSS LANGSUNG DI DALAM FILE */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Inter', sans-serif;
            }

            body {
                background-color: #f1f5f9;
                color: #1e293b;
            }

            .dashboard-wrapper {
                display: flex;
                min-height: 100vh;
            }

            /* Sidebar Styling */
            .sidebar {
                width: 260px;
                background-color: #0f172a;
                color: white;
                display: flex;
                flex-direction: column;
                padding: 20px;
                position: fixed;
                height: 100vh;
            }

            .sidebar-logo {
                padding: 20px 0;
                border-bottom: 1px solid #1e293b;
                text-align: center;
                margin-bottom: 20px;
            }

            .sidebar-logo h2 {
                font-size: 1.2rem;
                letter-spacing: 1px;
                color: #3b82f6;
            }

            .nav-menu {
                flex-grow: 1;
            }

            .nav-menu ul {
                list-style: none;
            }

            .nav-menu li {
                margin-bottom: 8px;
            }

            .nav-menu a {
                color: #94a3b8;
                text-decoration: none;
                padding: 12px 15px;
                display: block;
                border-radius: 8px;
                transition: all 0.3s;
                font-size: 0.95rem;
            }

            .nav-menu li.active a,
            .nav-menu a:hover {
                background-color: #1e293b;
                color: #3b82f6;
                font-weight: 600;
            }

            .sidebar-footer {
                padding-top: 20px;
                border-top: 1px solid #1e293b;
            }

            /* Main Content Styling */
            .main-content {
                flex-grow: 1;
                margin-left: 260px;
                /* Jarak agar tidak tertutup sidebar yang fixed */
                display: flex;
                flex-direction: column;
            }

            .topbar {
                background: white;
                padding: 15px 40px;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }

            .user-profile {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .user-name {
                font-weight: 600;
                color: #334155;
            }

            .content-area {
                padding: 40px;
            }

            .welcome-section {
                background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
                color: white;
                padding: 30px;
                border-radius: 16px;
                margin-bottom: 30px;
                box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.2);
            }

            .stats-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 25px;
            }

            .stat-card {
                background: white;
                padding: 25px;
                border-radius: 16px;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
                border: 1px solid #e2e8f0;
                transition: transform 0.3s;
            }

            .stat-card:hover {
                transform: translateY(-5px);
            }

            .stat-label {
                color: #64748b;
                font-size: 0.85rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 10px;
                display: block;
            }

            .stat-value {
                font-size: 1.8rem;
                font-weight: 700;
                color: #0f172a;
            }

            .btn-logout {
                width: 100%;
                padding: 12px;
                background-color: #ef4444;
                color: white;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                font-weight: 600;
                transition: background 0.3s;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 8px;
            }

            .btn-logout:hover {
                background-color: #dc2626;
            }

            .badge-online {
                background: #dcfce7;
                color: #15803d;
                padding: 4px 12px;
                border-radius: 20px;
                font-size: 0.75rem;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
        <div class="dashboard-wrapper">
            <aside class="sidebar">
                <div class="sidebar-logo">
                    <h2>ADMIN SYSTEM KAMPUS</h2>
                </div>

                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="{{ route('admin.dashboard') }}">📊 Dashboard</a></li>
                        <li><a href="#">📄 Data Pendaftar</a></li>
                        <li><a href="#">🎓 Calon Mahasiswa</a></li>
                        <li><a href="#">⚙️ Pengaturan</a></li>
                    </ul>
                </nav>

                <div class="sidebar-footer">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-logout">
                            Logout
                        </button>
                    </form>
                </div>
            </aside>

            <main class="main-content">
                <header class="topbar">
                    <div class="user-profile">
                        <span class="user-name">👤 {{ Auth::user()->name }}</span>
                    </div>
                </header>

                <section class="content-area">
                    <div class="welcome-section">
                        <h1>Selamat Datang, {{ Auth::user()->username }}!</h1>
                        <p>Panel kendali admin untuk manajemen pendaftaran mahasiswa baru.</p>
                    </div>

                    <div class="stats-container">
                        <div class="stat-card">
                            <span class="stat-label">Total Pendaftar</span>
                            <span class="stat-value">{{ $totalPendaftar }}</span>
                        </div>

                        <div class="stat-card">
                            <span class="stat-label">Tahun Akademik</span>
                            <span class="stat-value">2026/2027</span>
                        </div>

                        <div class="stat-card">
                            <span class="stat-label">Status Server</span>
                            <div>
                                <span class="stat-value">Aktif</span>
                                <span class="badge-online">Online</span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>

    </html>

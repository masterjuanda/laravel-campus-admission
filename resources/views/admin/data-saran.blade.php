<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Saran | Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: #f1f5f9; color: #1e293b; }
        .dashboard-wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 260px; background-color: #0f172a; color: white; display: flex; flex-direction: column; padding: 20px; position: fixed; height: 100vh; }
        .sidebar-logo { padding: 20px 0; border-bottom: 1px solid #1e293b; text-align: center; margin-bottom: 20px; }
        .sidebar-logo h2 { font-size: 1.2rem; letter-spacing: 1px; color: #3b82f6; }
        .nav-menu ul { list-style: none; }
        .nav-menu li { margin-bottom: 8px; }
        .nav-menu a { color: #94a3b8; text-decoration: none; padding: 12px 15px; display: block; border-radius: 8px; transition: all 0.3s; font-size: 0.95rem; }
        .nav-menu li.active a, .nav-menu a:hover { background-color: #1e293b; color: #3b82f6; font-weight: 600; }
        .sidebar-footer { padding-top: 20px; border-top: 1px solid #1e293b; }
        .btn-logout { width: 100%; padding: 12px; background-color: #ef4444; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; }
        .main-content { flex-grow: 1; margin-left: 260px; display: flex; flex-direction: column; }
        .topbar { background: white; padding: 15px 40px; display: flex; justify-content: flex-end; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .content-area { padding: 40px; }
        .page-title { font-size: 1.5rem; font-weight: 700; margin-bottom: 20px; }
        .table-wrapper { background: white; border-radius: 16px; padding: 25px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        thead { background-color: #0f172a; color: white; }
        thead th { padding: 12px 15px; text-align: left; font-size: 0.85rem; text-transform: uppercase; }
        tbody tr { border-bottom: 1px solid #e2e8f0; }
        tbody tr:hover { background-color: #f8fafc; }
        tbody td { padding: 12px 15px; font-size: 0.9rem; color: #334155; }
        .empty-msg { text-align: center; color: #94a3b8; padding: 30px; }
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
                <li><a href="{{ route('admin.dashboard') }}">📊 Dashboard</a></li>
                <li><a href="{{ route('admin.dashboard', ['view' => 'pendaftaran']) }}">📄 Data Pendaftaran</a></li>
                <li class="active"><a href="{{ route('admin.saran') }}">💬 Data Saran</a></li>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </aside>

    <main class="main-content">
        <header class="topbar">
            <div>👤 {{ Auth::user()->name }}</div>
        </header>
        <section class="content-area">
            <h2 class="page-title">💬 Data Saran Masuk</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Saran</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($semuaSaran as $index => $s)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->saran }}</td>
                            <td>{{ $s->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="empty-msg">Belum ada saran masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>
</body>
</html>
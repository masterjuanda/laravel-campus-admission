<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nama_kampus ?? 'Website Kampus' }}</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS buatan sendiri (tetap dipakai) --}}
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    {{-- HEADER & NAVBAR (TETAP) --}}
    <header class="main-header">
        <div class="logo">
            <h1 class="m-0">{{ $nama_kampus ?? 'Universitas Teknologi Medan' }}</h1>
        </div>
        <nav class="main-nav d-flex justify-content-between align-items-center">
            <ul class="m-0 d-flex align-items-center" style="gap: 15px;">
                <li>
                    <a href="javascript:void(0)" data-menu="beranda" class="nav-link-spa active"
                        onclick="tampilKonten('beranda', this)">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-menu="tentang" class="nav-link-spa"
                        onclick="tampilKonten('tentang', this)">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-menu="fakultas" class="nav-link-spa"
                        onclick="tampilKonten('fakultas', this)">
                        Fakultas
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-menu="pendaftaran" class="nav-link-spa"
                        onclick="tampilKonten('pendaftaran', this)">
                        Pendaftaran
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-menu="kontak" class="nav-link-spa"
                        onclick="tampilKonten('kontak', this)">
                        Kontak
                    </a>
                </li>

                {{-- 🔥 BAGIAN LOGIN / AUTH --}}
                @auth
                    <li>
                        <a href="/admin" class="btn btn-success btn-sm">Dashboard</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}" class="text-white me-2">
                            Login
                        </a>
                    </li>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                @endauth
            </ul>
        </nav>
    </header>

    {{-- HERO (TETAP ADA) --}}
    <section class="hero" id="hero-section">
        <h2>Selamat Datang di {{ $nama_kampus ?? 'Universitas Teknologi Medan' }}</h2>
        <p>{{ $slogan ?? 'Mencetak Generasi Unggul' }}</p>
        <a href="javascript:void(0)" onclick="tampilKonten('pendaftaran')" class="cta-button">Daftar Sekarang</a>
    </section>

    {{-- KONTEN DINAMIS (INI YANG BERUBAH) --}}
    <main class="main-content" iq="main-content">

        <div id="konten-beranda" class="konten-spa">
            @include('konten.beranda')
        </div>

        <div id="konten-tentang" class="konten-spa" style="display:none;">
            @include('konten.tentang')
        </div>

        <div id="konten-fakultas" class="konten-spa" style="display:none;">
            @include('konten.fakultas')
        </div>

        <div id="konten-pendaftaran" class="konten-spa" style="display:none;">
            @include('konten.pendaftaran')
        </div>

        <div id="konten-kontak" class="konten-spa" style="display:none;">
            @include('konten.kontak')
        </div>

    </main>

    <!-- TOMBOL SCROLL KE ATAS -->
    <button id="btnScrollTop" onclick="scrollKeAtas()">
        ⬆
    </button>


    {{-- FOOTER (TETAP) --}}
    <footer class="main-footer">
        <p>&copy; {{ date('Y') }} {{ $nama_kampus ?? 'Universitas Teknologi Medan' }} | Master Juanda Sirait</p>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- JAVASCRIPT SPA --}}

    <script>
        const JARAK_JUDUL = -30; // ⬅️ ATUR SEKALI, BERLAKU SEMUA NAV

        function tampilKonten(nama, el) {

            // 1. Sembunyikan semua konten
            document.querySelectorAll('.konten-spa').forEach(k => {
                k.style.display = 'none';
            });

            // 2. Tampilkan konten target
            const target = document.getElementById('konten-' + nama);
            if (target) {
                target.style.display = 'block';
            }

            // 3. Reset active nav
            document.querySelectorAll('.nav-link-spa').forEach(nav => {
                nav.classList.remove('active');
            });
            if (el) el.classList.add('active');

            // 4. Scroll dengan jarak konsisten
            const hero = document.getElementById('hero-section');
            const header = document.querySelector('.main-header');

            if (hero && header) {
                const posisi =
                    hero.offsetTop +
                    hero.offsetHeight -
                    header.offsetHeight -
                    JARAK_JUDUL;

                window.scrollTo({
                    top: posisi,
                    behavior: 'smooth'
                });
            }
        }
    </script>

    {{-- <script>
        function tampilKonten(nama) {
            const semuaKonten = document.querySelectorAll('.konten-spa');
            semuaKonten.forEach(k => k.style.display = 'none');
            const target = document.getElementById('konten-' + nama);
            if (target) {
                target.style.display = 'block';
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script> --}}



    <script>
        const btnScrollTop = document.getElementById('btnScrollTop');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                btnScrollTop.style.display = 'block';
            } else {
                btnScrollTop.style.display = 'none';
            }
        });

        function scrollKeAtas() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>

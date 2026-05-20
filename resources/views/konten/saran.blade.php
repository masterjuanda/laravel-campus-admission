{{-- JUDUL --}}
<section class="mb-5 text-center">
    <h2 class="fw-bold text-primary">Kotak Saran</h2>
    <p class="text-muted">Sampaikan saran dan masukan Anda untuk kami</p>
</section>

{{-- PESAN SUKSES --}}
@if(session('saran_sukses'))
    <div class="alert alert-success text-center mb-4">
        {{ session('saran_sukses') }}
    </div>
@endif

{{-- FORM SARAN --}}
<div class="row justify-content-center mb-5">
    <div class="col-md-7">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-4 text-primary">Form Saran</h5>

                <form action="{{ route('kirim.saran') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control"
                               placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                               placeholder="Masukkan email Anda" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Saran</label>
                        <textarea name="saran" class="form-control" rows="5"
                                  placeholder="Tulis saran Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary px-4">
                        Kirim Saran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
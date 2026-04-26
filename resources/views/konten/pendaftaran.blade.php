<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <h2 style="text-align: center; font-weight: bold">📝 Formulir Pendaftaran Mahasiswa Baru Tahun 2026</h2>

        <p class="desc" style="text-align: center">
            Isi formulir di bawah ini dengan data yang benar dan lengkap untuk mendaftar di "Universitas Teknologi
            Medan"
        </p>

        <h4 class="section" style="color: blue;  text-align: center; margin-bottom: 20px">Data Pribadi Calon Mahasiswa
        </h4>

        <form action="{{ route('proses.pendaftaran') }}" method="POST">

            @csrf

            <table style="border-collapse: collapse;">
                <tr>
                    <td style="width:200px;">Nama Lengkap</td>
                    <td style="width:10px;">:</td>
                    <td>
                        <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap">
                    </td>
                </tr>

                <tr>
                    <td>Email Aktif</td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" placeholder="contoh@email.com">
                    </td>
                </tr>

                <tr>
                    <td>Nomor Telepon/WA</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="telepon" placeholder="0812345xxxxx">
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_lahir">
                    </td>
                </tr>

                <tr>
                    <td>Alamat Lengkap</td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" placeholder="Alamat rumah sekarang" style="width: 200px"></textarea>
                    </td>
                </tr>
            </table>

            <hr>

            <h4 class="section" style="color: blue;  text-align: center; margin-bottom: 20px">Pilihan Program Studi</h4>

            <table style="border-collapse: collapse;">
                <tr>
                    <td style="width:200px;">Fakultas Pilihan</td>
                    <td style="width:10px;">:</td>
                    <td>
                        <select name="fakultas_pilihan" style="width:200px;">
                            <option>-- Pilih Fakultas --</option>
                            <option>Teknik & Informatika</option>
                            <option>Ekonomi & Bisnis</option>
                            <option>Ilmu Sosial</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Program Studi Pilihan</td>
                    <td>:</td>
                    <td>
                        <select name="prodi_pilihan" style="width:200px;">
                            <option>-- Pilih Program Studi --</option>
                            <option>Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Manajemen</option>
                            <option>Akuntansi</option>
                        </select>
                    </td>
                </tr>
            </table>

            <hr>
            <div class="checkbox" style="margin-bottom: 10px">
                <label>
                    <input type="checkbox" name="persetujuan" value="1" required>
                    Saya menyatakan bahwa data yang saya isi adalah benar
                </label>
            </div>

            <div class="submit">
                <input type="submit" value="Kirim Pendaftaran" style="background: yellow">
            </div>

        </form>

    </div>

</body>

</html>

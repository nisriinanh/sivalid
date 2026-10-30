@php($siteName = config('site.name', 'SIVALID'))
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi - {{ $siteName }}</title>
    <link rel="icon" type="image/png" href="{{ asset(config('site.favicon')) }}">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #F3F9F6;
            color: #1F2937;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }
        .hero {
            background: linear-gradient(135deg, #13795B 0%, #0B5E45 100%);
            padding: 48px 24px 40px;
            text-align: center;
            color: #fff;
            border-radius: 0 0 24px 24px;
        }
        .hero img {
            width: 72px;
            height: 72px;
            border-radius: 18px;
            background: #fff;
            padding: 6px;
            margin-bottom: 16px;
        }
        .hero h1 { font-size: 1.5rem; font-weight: 800; letter-spacing: .5px; }
        .hero p { margin-top: 6px; font-size: .85rem; color: rgba(255,255,255,.85); }
        .wrap { max-width: 820px; margin: -20px auto 40px; padding: 0 16px; }
        .card {
            background: #fff;
            border-radius: 18px;
            padding: 28px 24px 32px;
            box-shadow: 0 6px 24px rgba(15, 23, 42, .06);
        }
        h2 {
            font-size: 1.02rem;
            font-weight: 700;
            color: #0B5E45;
            margin: 28px 0 10px;
            padding-left: 10px;
            border-left: 4px solid #13795B;
        }
        h2:first-of-type { margin-top: 4px; }
        h3 { font-size: .93rem; font-weight: 600; color: #111827; margin: 16px 0 6px; }
        p { margin-bottom: 10px; font-size: .9rem; }
        ul { margin: 0 0 10px 20px; }
        li { font-size: .9rem; margin-bottom: 5px; }
        .muted { color: #6B7280; font-size: .82rem; }
        .note {
            background: #F3F9F6;
            border: 1px solid #D7F0E4;
            border-radius: 12px;
            padding: 12px 14px;
            font-size: .85rem;
            margin: 12px 0;
        }
        table { width: 100%; border-collapse: collapse; margin: 8px 0 14px; font-size: .85rem; }
        th, td { text-align: left; padding: 9px 10px; border-bottom: 1px solid #E5E7EB; vertical-align: top; }
        th { color: #0B5E45; font-weight: 600; width: 38%; }
        a { color: #13795B; font-weight: 600; text-decoration: none; }
        a:hover { text-decoration: underline; }
        footer { text-align: center; padding: 0 24px 40px; font-size: .78rem; color: #9CA3AF; }
        @media (max-width: 480px) {
            .hero { padding: 36px 18px 32px; }
            .card { padding: 22px 18px 26px; }
            th { width: 45%; }
        }
    </style>
</head>
<body>
    <header class="hero">
        <img src="{{ asset(config('site.logo')) }}" alt="Logo {{ $siteName }}">
        <h1>Kebijakan Privasi</h1>
        <p>{{ $siteName }} &middot; Sistem Informasi Validasi</p>
    </header>

    <main class="wrap">
        <div class="card">
            <p class="muted">Berlaku sejak 30 Oktober 2026</p>

            <p>
                {{ $siteName }} dikelola oleh Politeknik LPP untuk mengelola pengajuan dan validasi surat
                serta sertifikat. Kebijakan ini menjelaskan data apa yang diproses ketika Anda menggunakan
                aplikasi Android {{ $siteName }} dan situs {{ config('app.url') }}.
            </p>

            <h2>1. Data yang kami proses</h2>

            <h3>a. Data akun</h3>
            <ul>
                <li>Nama lengkap, email, NIP, dan jabatan.</li>
                <li>Unit kerja, peran dalam unit (staf atau kepala), dan status administrator.</li>
                <li>Password, disimpan dalam bentuk hash dan tidak dapat dibaca oleh petugas.</li>
            </ul>
            <p class="muted">Akun dapat dibuat oleh administrator sistem atau melalui pendaftaran yang disediakan.</p>

            <h3>b. Data surat dan sertifikat</h3>
            <ul>
                <li>Surat: jenis/nama surat, nomor, tanggal, tujuan, unit pengaju, status (diajukan, disetujui, direvisi), catatan revisi, dan berkas PDF.</li>
                <li>Sertifikat: jenis, nomor, penerbit, tanggal, status validasi, dan berkas sertifikat.</li>
                <li>Riwayat validasi, termasuk nama validator dan waktu validasi.</li>
                <li>Nama mahasiswa atau pemohon yang tercantum di dalam dokumen.</li>
            </ul>

            <h3>c. Token perangkat untuk notifikasi</h3>
            <p>
                Kami menyimpan token perangkat dan platform (Android) yang diberikan layanan push notification.
                Token ini hanya dipakai untuk mengirim pemberitahuan terkait surat dan sertifikat, dan dihapus
                dari server saat Anda logout.
            </p>

            <h3>d. Halaman verifikasi publik</h3>
            <div class="note">
                Dokumen yang sudah disetujui memiliki tautan dan QR verifikasi yang dapat dibuka tanpa login.
                Halaman tersebut menampilkan metadata dokumen (jenis, nomor, tanggal, unit) serta nama pemohon
                dan/atau validator. Jangan membagikan tautan atau QR kepada pihak yang tidak berhak.
            </div>

            <h3>e. Catatan teknis</h3>
            <p>
                Server mencatat informasi teknis seperti alamat IP, waktu akses, dan jenis perangkat untuk
                keperluan keamanan, pemantauan gangguan, dan pemecahan masalah.
            </p>

            <h2>2. Izin pada perangkat</h2>
            <table>
                <tr>
                    <th>Kamera</th>
                    <td>Hanya aktif saat Anda memindai QR verifikasi. Gambar kamera tidak disimpan maupun dikirim ke server.</td>
                </tr>
                <tr>
                    <th>Notifikasi</th>
                    <td>Digunakan untuk mengirim pemberitahuan surat dan sertifikat. Dapat dimatikan kapan saja melalui pengaturan Android.</td>
                </tr>
                <tr>
                    <th>Penyimpanan/berkas</th>
                    <td>Digunakan saat Anda memilih atau mengunduh berkas surat dan sertifikat.</td>
                </tr>
            </table>
            <p class="muted">Aplikasi tidak mengakses lokasi, kontak, maupun pesan Anda.</p>

            <h2>3. Tujuan pemrosesan</h2>
            <ul>
                <li>Menjalankan proses pengajuan, validasi, dan pengarsipan surat serta sertifikat.</li>
                <li>Menampilkan status pengajuan dan riwayat validasi kepada pengguna yang berwenang.</li>
                <li>Mengirim notifikasi terkait tugas validasi dan hasil keputusan.</li>
                <li>Menyediakan verifikasi keaslian dokumen bagi pihak yang berkepentingan.</li>
                <li>Menjaga keamanan sistem dan menindaklanjuti gangguan teknis.</li>
            </ul>

            <h2>4. Pihak ketiga</h2>
            <p>Kami tidak menjual atau menyewakan data pengguna. Data hanya diproses oleh pihak berikut sebatas keperluan layanan:</p>
            <ul>
                <li><strong>Google Firebase Cloud Messaging</strong> &mdash; pengiriman notifikasi push ke perangkat Android.</li>
                <li><strong>Penyedia hosting dan jaringan kampus</strong> &mdash; penyimpanan server, basis data, dan berkas.</li>
            </ul>

            <h2>5. Penyimpanan dan keamanan</h2>
            <ul>
                <li>Akses data dibatasi berdasarkan peran dan unit kerja.</li>
                <li>Password disimpan sebagai hash; komunikasi aplikasi dengan server menggunakan HTTPS.</li>
                <li>Berkas dokumen disimpan di server dan hanya ditampilkan kepada pengguna yang berwenang atau melalui tautan verifikasi resmi.</li>
            </ul>

            <h2>6. Masa penyimpanan</h2>
            <ul>
                <li>Data akun disimpan selama akun aktif dan masih diperlukan untuk keperluan layanan.</li>
                <li>Dokumen yang telah divalidasi disimpan sebagai arsip institusi sesuai ketentuan yang berlaku.</li>
                <li>Token notifikasi dihapus saat logout atau ketika perangkat tidak lagi aktif.</li>
            </ul>
            <div class="note">
                Penghapusan akun tidak otomatis menghapus dokumen yang sudah disetujui dan diarsipkan, karena
                dokumen tersebut merupakan bagian dari arsip resmi institusi.
            </div>

            <h2>7. Hak Anda</h2>
            <ul>
                <li>Melihat dan memperbarui nama, NIP, serta jabatan melalui menu <strong>Edit Profil</strong> di aplikasi.</li>
                <li>Mengubah password melalui menu <strong>Ganti Password</strong>.</li>
                <li>Menonaktifkan notifikasi melalui pengaturan perangkat.</li>
                <li>Mengajukan salinan data atau penghapusan akun melalui administrator sistem.</li>
            </ul>

            <h2>8. Perubahan kebijakan</h2>
            <p>
                Kebijakan ini dapat diperbarui bila terjadi perubahan fitur atau ketentuan yang berlaku.
                Versi terbaru selalu ditampilkan pada halaman ini beserta tanggal berlakunya.
            </p>

            <h2>9. Kontak</h2>
            <p>Pertanyaan mengenai kebijakan privasi atau permintaan terkait data pribadi dapat disampaikan kepada:</p>
            <p>
                <strong>Administrator Sistem {{ $siteName }}</strong><br>
                Politeknik LPP
                @if (config('site.privacy_email'))
                    <br><a href="mailto:{{ config('site.privacy_email') }}">{{ config('site.privacy_email') }}</a>
                @endif
            </p>
        </div>
    </main>

    <footer>&copy; {{ date('Y') }} {{ $siteName }} &middot; Politeknik LPP</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Rumah Kost</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- File CSS -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('kamar.index') }}">Daftar Kamar</a></li>
                <li><a href="{{ route('kamar.create') }}">Tambah Kamar</a></li>
                <li><a href="{{ route('profiles.index') }}">Daftar Profile</a></li> 
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>        
    </header>

    <main>
        <section id="home">
            <h1>Selamat Datang di Sistem Informasi Rumah Kost</h1>
            <p>Temukan kamar kost dengan mudah dan cepat!</p>
            <a href="{{ route('kamar.index') }}" class="btn">Lihat Daftar Kamar</a>
        </section>

        <section id="profiles">
            <h2>Daftar Profile</h2>
            <ul>
                @foreach ($profiles as $profile)
                    <li>
                        <h3>{{ $profile->nim }}</h3>
                        <p>Kelas: {{ $profile->kelas }}</p>
                        @if ($profile->foto_profile)
                            <img src="{{ asset('storage/' . $profile->foto_profile) }}" alt="Foto {{ $profile->nim }}" width="100">
                        @endif
                        <p>Apa yang Dikerjakan: {{ $profile->apa_yang_dikerjakan }}</p>
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('profiles.create') }}" class="btn">Tambah Profile Baru</a>
        </section>
        
        <section id="contact">
            <h2>Kontak</h2>
            <p>Hubungi kami untuk informasi lebih lanjut:</p>
            <ul>
                <li>Email: info@rumahkost.com</li>
                <li>Telepon: +62 812 3456 7890</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Sistem Informasi Rumah Kost. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>

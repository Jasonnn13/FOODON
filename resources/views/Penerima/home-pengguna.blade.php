<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home Pengguna</title>
    <style>
        /* Inline CSS */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        /* Terapkan font Poppins dan ubah ukuran font */
        html {
            font-size: 20px; /* 1rem akan sama dengan 20px */
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem; /* 2.5 kali ukuran standar */
            background-color: #87CEEB;
            margin: 0;
            padding: 5rem 0rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            overflow-y: auto;
        }

        .container {
            width: 90%;
            max-width: 125rem; /* Membuat lebar kontainer lebih besar */
            padding: 2.5rem;
            box-sizing: border-box;
            border-radius: 1.25rem;
            background-color: #87CEEB;
            text-align: left;
        }

        .profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 2.5rem;
            gap: 2.5rem; /* Menambahkan jarak antara elemen */
        }

        .profile-photo {
            position: relative;
            width: 15rem;
            height: 15rem;
            background-color: #dadada;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 5px solid black; /* Border hitam tipis */
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-photo p {
            position: absolute;
            bottom: -2.5rem;
            width: 100%;
            text-align: center;
            font-size: 1.25rem; /* Ukuran font yang lebih kecil */
            color: black;
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h1 {
            font-size: 3rem; /* Ukuran font lebih besar */
            margin: 0;
        }

        .profile-info p {
            font-size: 1.875rem; /* Ukuran font lebih besar */
            margin: 0;
            font-weight: 500; /* Membuat tulisan alamat bold */
        }

        .actions-container {
            text-align: center;
            margin-bottom: 2.5rem;
            background-color: white;
            border-radius: 0.625rem;
        }

        .actions {
            display: flex;
            justify-content: space-around;
            padding: 0.5rem; /* Mengurangi height */
        }

        .actions i {
            font-size: 3.75rem;
            color: black;
            cursor: pointer;
            transition: transform 0.2s;
            padding-right: 0.3em;
            text-align: center;
        }

        .actions i:hover {
            transform: scale(1.1);
        }

        .action-labels {
            display: flex;
            justify-content: space-around;
            margin-top: -0.3em;
        }

        .action-labels span {
            font-size: 1.5rem;
            color: black;
        }

        .content-container {
            background-color: white;
            padding: 1.25rem;
            border-radius: 1.25rem;
        }

        .recommendation-title h2 {
            font-size: 1.25rem; /* Ukuran font lebih kecil untuk judul */
            margin: 0; /* Hapus margin atas dan bawah */
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(36.5rem, 0.9fr)); /* Menambah width */
            gap: 2.5rem;
        }

        .product {
            display: flex;
            align-items: center;
            background-color: #87CEEB;
            padding: 1.25rem;
            border-radius: 0.625rem;
            position: relative;
        }

        .product img {
            width: 12.5rem;
            height: 12.5rem;
            border-radius: 0.625rem;
            margin-right: 1.25rem;
        }

        .product-info h2 {
            font-size: 2.5rem;
            margin: 0;
            margin-bottom: 0.625rem;
        }

        .product-info p {
            margin: 0;
            font-size: 1.5rem; /* Memperkecil font best before dan stock */
            text-align: justify; /* Justify text */
        }

        .product-actions {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            display: flex;
            gap: 1.25rem;
        }

        .product-actions i {
            font-size: 2rem;
            color: black;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .product-actions i:hover {
            transform: scale(1.1);
        }

        .see-more {
            display: block;
            text-align: center;
            font-size: 1.5rem;
            color: black;
            margin-top: 2rem;
            text-decoration: none;
            transition: color 0.2s;
        }

        .see-more:hover {
            color: #87CEEB;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <div class="profile-photo">
                <img src="profile.jpg" alt="Profile Photo">
            </div>
            <div class="profile-info">
                <h1>Username Pengguna</h1>
                <p>Lokasi anda saat ini:</p>
                <p>Lokasi pengguna...</p>
            </div>
        </div>
        <div class="actions-container">
            <div class="actions">
                <i class="fi fi-rr-user" title="Lihat Profile" onclick="animateButton(this)"></i>
                <i class="fi fi-rs-search" title="Cari Produk" onclick="animateButton(this)"></i>
            </div>
            <div class="action-labels">
                <span>Lihat Profile</span>
                <span>Cari Produk</span>
            </div>
        </div>
        <div class="content-container">
            <div class="recommendation-title">
                <h2>Rekomendasi berdasarkan lokasi:</h2>
            </div>  
            <div class="product-list">
                @foreach($donationItems as $donationItem)
                    <div class="product">
                        <img src="{{ asset($donationItem->foto) }}" alt="{{ $donationItem->nama }}">
                        <div class="product-info">
                            <h2>{{ $donationItem->nama }}</h2>
                            <p><strong>{{ $donationItem->lokasi_pengambilan }}</strong></p>
                            <p>Best Before: {{ $donationItem->tanggal_kadaluwarsa }}</p>
                            <p>Stock: {{ $donationItem->jumlah }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('product-list-penerima') }}" class="see-more">Lihat produk lain</a>
        </div>
    </div>
    <script>
        // Inline JavaScript
        function animateButton(element) {
            element.classList.add('clicked');
            setTimeout(() => {
                element.classList.remove('clicked');
            }, 200);
        }
    </script>
</body>
</html>

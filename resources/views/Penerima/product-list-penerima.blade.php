<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <style>
        /* Inline CSS styles */
        html {
            font-size: 20px; /* 1rem will be 20px */
        }
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            background-color: #ffffff;
            margin: 0;
            padding: 5rem 0rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            overflow-y: auto;
        }
        .container {
            width: 100%;
            max-width: 125rem;
            padding: 2.5rem;
            box-sizing: border-box;
            border-radius: 1.25rem;
            background-color: #ffffff;
            text-align: left;
            position: relative;
        }
        .back-button {
            position: absolute;
            top: -1rem;
            left: 3.2rem;
            font-size: 3rem;
            color: black;
            cursor: pointer;
            text-decoration: none;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(31.25rem, 1fr));
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
            font-size: 1.8rem;
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
        .confirmation-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            z-index: 1000;
            border-radius: 2rem;
            font-size: 1rem;
            height: 10em;
        }
        .confirmation-box button {
            margin: 0 1rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        .clicked {
            transform: scale(0.95);
            transition: transform 0.2s;
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
        <a href="/Home-Penerima" class="back-button"><<</a>
        <div class="content-container">
            <div class="product-list">
                @foreach($posts as $donationItem)
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
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const actionButtons = document.querySelectorAll('.product-actions i.fi-rr-trash-xmark');
            actionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const confirmationBox = document.createElement('div');
                    confirmationBox.classList.add('confirmation-box');
                    confirmationBox.innerHTML = `
                        <p>Apakah Anda yakin ingin menghapus produk ini?</p>
                        <button id="confirm-yes">Iya</button>
                        <button id="confirm-no">Tidak</button>
                    `;
                    document.body.appendChild(confirmationBox);

                    document.getElementById('confirm-yes').addEventListener('click', function() {
                        button.closest('.product').remove();
                        document.body.removeChild(confirmationBox);
                    });

                    document.getElementById('confirm-no').addEventListener('click', function() {
                        document.body.removeChild(confirmationBox);
                    });
                });
            });
        });
    </script>
</body>
</html>

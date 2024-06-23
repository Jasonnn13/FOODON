<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <!-- Inline CSS and external stylesheet links -->
    <!-- CSS styles go here -->
</head>
<body>
    <!-- Your existing HTML content -->
    <div class="container">
        <a href="../home-donatur" class="back-button"><<</a> <!-- Tanda back untuk kembali ke halaman semula -->
        <div class="content-container">
            <div class="product-list">
                <div class="product">
                    <img src="apelfuji.jpg" alt="Apel Fuji">
                    <div class="product-info">
                        <h2>Apel Fuji RRC</h2>
                        <p>Best Before: 21/05/2024</p>
                        <p>Stock: 153 buah</p>
                    </div>
                    <div class="product-actions">
                        <i class="fi fi-rr-file-edit"></i>
                        <i class="fi fi-rr-trash-xmark"></i>
                    </div>
                </div>
                <!-- Additional products... -->
            </div>
        </div>
    </div>

    <!-- JavaScript -->
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

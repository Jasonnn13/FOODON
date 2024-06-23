document.addEventListener('DOMContentLoaded', function() {
    const actionButtons = document.querySelectorAll('.actions i, .product-actions i.fi-rr-trash-xmark');
    
    actionButtons.forEach(button => {
        button.addEventListener('click', function() {
            button.classList.add('clicked');
            setTimeout(() => {
                button.classList.remove('clicked');
            }, 200);
        });
    });

    const deleteButtons = document.querySelectorAll('.product-actions .fi-rr-trash-xmark');
    deleteButtons.forEach(deleteButton => {
        deleteButton.addEventListener('click', function() {
            const confirmationBox = document.createElement('div');
            confirmationBox.classList.add('confirmation-box');
            confirmationBox.innerHTML = `
                <p>Apakah Anda yakin ingin menghapus produk ini?</p>
                <button id="confirm-yes">Iya</button>
                <button id="confirm-no">Tidak</button>
            `;
            document.body.appendChild(confirmationBox);

            document.getElementById('confirm-yes').addEventListener('click', function() {
                deleteButton.closest('.product').remove();
                document.body.removeChild(confirmationBox);
            });

            document.getElementById('confirm-no').addEventListener('click', function() {
                document.body.removeChild(confirmationBox);
            });
        });
    });
});

/* Tambahkan kelas CSS untuk animasi zoom dan clicked */
const style = document.createElement('style');
style.innerHTML = `
    .clicked {
        transform: scale(0.95);
        transition: transform 0.2s;
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
`;
document.head.appendChild(style);

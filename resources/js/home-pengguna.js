document.addEventListener('DOMContentLoaded', function() {
    const profilePhoto = document.querySelector('.profile-photo img');

    const actionButtons = document.querySelectorAll('.actions i');
    actionButtons.forEach(button => {
        button.addEventListener('click', function() {
            button.classList.add('clicked');
            setTimeout(() => {
                button.classList.remove('clicked');
            }, 200);
        });
    });

    const deleteButtons = document.querySelectorAll('.fi-rr-trash-xmark');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const product = button.closest('.product');
            const checkbox = product.querySelector('.checkbox');
            checkbox.checked = !checkbox.checked;
        });
    });

    const deleteAllButton = document.getElementById('delete-all');
    deleteAllButton.addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.product .checkbox:checked');
        checkboxes.forEach(checkbox => {
            const product = checkbox.closest('.product');
            product.remove();
        });
    });

    const cancelButton = document.getElementById('cancel');
    cancelButton.addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.product .checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    });
});

/* Tambahkan kelas CSS untuk animasi zoom dan clicked */
const style = document.createElement('style');
style.innerHTML = `
    .zoom {
        transform: scale(2);
        transition: transform 0.3s;
    }
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

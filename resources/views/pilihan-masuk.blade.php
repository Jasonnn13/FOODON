<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pilihan Masuk</title>
    <!-- Inline CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'); /* Flaticon */

        html {
            font-size: 18px; /* 1rem will be equal to 18px for larger text size */
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 2.25rem; /* 0.25 times larger */
            background-color: #87CEEB;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .container {
            width: 100%;
            max-width: 45rem; /* 45rem is 720px if root font size is 16px */
            padding: 3rem; /* Adding more padding */
            box-sizing: border-box;
            border-radius: 1rem; /* Adding border-radius */
            background-color: rgba(255, 255, 255, 0.1); /* Making container background slightly transparent */
            text-align: center; /* Center text inside container */
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem; /* Increasing bottom margin */
            font-size: 4.5rem; /* Adjusting font size */
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="number"], input[type="file"], textarea {
            width: 100%;
            padding: 1.125rem; /* Increasing padding */
            margin: 1.5rem 0; /* Increasing margin */
            border: none;
            border-radius: 0.5rem; /* Adjusting border-radius */
            box-sizing: border-box;
            font-size: 1.75rem; /* Adjusting font size */
            opacity: 80%;
        }

        button {
            width: 100%;
            padding: 1.125rem; /* Increasing padding */
            border: none;
            border-radius: 1rem; /* Adjusting border-radius */
            background-color: #ffffff;
            color: #000;
            font-size: 1.75rem; /* Adjusting font size */
            cursor: pointer;
            margin: 1.5rem 0; /* Increasing margin */
            transition: transform 0.2s; /* Adding transition for animation */
        }

        button:hover {
            transform: scale(1.05); /* Enlarging button on hover */
        }

        button:active {
            transform: scale(0.95); /* Shrinking button on click */
        }

        button.pilihan {
            background-color: #ffffff;
            color: #000;
            font-size: 2.25rem; /* Larger font size */
            margin: 1rem 0; /* Margin between buttons */
        }

        button.social {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #3b5998; /* Facebook blue */
            color: #fff;
        }

        button.social.google {
            background-color: #ffffff; /* Google white */
            color: #000; /* Change Google button text to black */
        }

        button.social i {
            margin-right: 1rem; /* Spacing between icon and text */
            font-size: 2rem; /* Icon size */
        }

        button.social + button.social {
            margin-top: 1.5rem; /* Increasing margin-top */
        }

        p {
            text-align: center;
            color: #ffffff;
            font-size: 1.75rem; /* Adjusting font size */
        }

        a {
            color: #000000;
            text-decoration: none;
            font-size: 1.75rem; /* Adjusting font size */
        }

        .black-text {
            color: #000 !important;
        }

        .clicked {
            transform: scale(0.95); /* Animation for clicked button */
        }
    </style>
    <!-- Inline JavaScript -->
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const donaturButton = document.getElementById('donatur');
            const penerimaButton = document.getElementById('penerima');

            donaturButton.addEventListener('click', function() {
                window.location.href = '/Donatur';
            });

            penerimaButton.addEventListener('click', function() {
                window.location.href = '/Penerima';
            });
            // Animation on button click
            const buttons = document.querySelectorAll('.pilihan');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    button.classList.add('clicked');
                    setTimeout(() => {
                        button.classList.remove('clicked');
                    }, 200);
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Masuk sebagai :</h1>
        <button class="pilihan" id="donatur">Donatur</button>
        <button class="pilihan" id="penerima">Penerima</button>
    </div>
</body>
</html>

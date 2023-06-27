<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Cumpleaños</title>
    <style>
        body {
            background-color: #00c3ff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            margin-top: 0;
            background: linear-gradient(to right, #ff4081, #3f51b5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            color: #333;
            font-size: 18px;
            line-height: 1.5;
        }

        .invitation {
            margin-top: 30px;
            text-align: center;
            opacity: 0;
            transform: translateX(-100px);
            animation: slide-in 0.5s forwards;
            animation-delay: 0.2s;
        }

        @keyframes slide-in {
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .invitation p {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .invitation .confetti {
            width: 20px;
            height: 20px;
            background-color: #ff4081;
            border-radius: 50%;
            position: relative;
            animation: confetti 1s infinite;
            animation-delay: 0.1s;
        }

        @keyframes confetti {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(300px) rotate(360deg);
                opacity: 0;
            }
        }

        .invitation a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff4081;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 20px;
            transition: background-color 0.3s ease;
        }

        .invitation a:hover {
            background-color: #f50057;
        }

        /* Parallax effect */
        .invitation .parallax {
            perspective: 1000px;
            perspective-origin: 50% 50%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .invitation .parallax-layer {
            position: relative;
            width: 100%;
            height: 100vh;
        }

        .invitation .parallax-layer img {
            margin: auto;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            transform-style: preserve-3d;
            animation: parallax 10s infinite linear;
            border-radius: 20px;
        }

        @keyframes parallax {            0% {
                transform: translateZ(0);
            }
            100% {
                transform: translateZ(-1000px);
            }
        }

        /* Agrega una clase "appear" al elemento cuando sea visible en la pantalla */
        .appear {
            opacity: 1;
        }

        /* Estilos para letras de colores */
        .colorful-text span {
            display: inline-block;
        }

        .colorful-text .color1 {
            color: #ff4081;
        }

        .colorful-text .color2 {
            color: #3f51b5;
        }

        .colorful-text .color3 {
            color: #00bcd4;
        }

        .colorful-text .color4 {
            color: #4caf50;
        }

        .colorful-text .color5 {
            color: #ffc107;
        }

        .colorful-text .color6 {
            color: #9c27b0;
        }

        /* Estilos para la lluvia de papelitos */
        .confetti-container {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ff4081;
            border-radius: 50%;
            opacity: 0;
            transform: translateY(0);
            animation: confetti-fall 4s infinite;
        }

        @keyframes confetti-fall {
            0% {
                opacity: 1;
                transform: translateY(-100%);
            }
            100% {
                opacity: 0;
                transform: translateY(100%);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="colorful-text">
            <span class="color1">¡¡TE INVITO A MI</span>
            <span class="color2">CUNPLEAÑOS</span>
            <span class="color3">!!</span>
        </h1>
        <p>¡Hola amigo/a!</p>
        <div class="invitation">
            <p>¡Estás invitado/a a mi fiesta de cumpleaños!</p>
            <p>Ven a celebrar conmigo y disfrutar de un día lleno de diversión y sorpresas.</p>
            <div class="parallax">
                <div class="parallax-layer">
                    <img src="img/Capitan America.jpg" alt="Imagen 1">
                </div>
            </div>
            <p class="confetti-container">
                <span class="confetti"></span> Fecha: [Fecha del cumpleaños] <span class="confetti"></span>
            </p>
            <p class="confetti-container">
                <span class="confetti"></span> Hora: [Hora de inicio] <span class="confetti"></span>
            </p>
            <p class="confetti-container">
                <span class="confetti"></span> Dirección: [Dirección de la fiesta] <span class="confetti"></span>
            </p>
            <a href="#">Confirmar asistencia</a>
        </div>
    </div>

    <script>
        // Obtén el elemento que deseas observar
        const invitation = document.querySelector('.invitation');

        // Crea una nueva instancia del Intersection Observer
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Si                    entry.target.classList.add('appear');
                }
            });
        });

        // Observa el elemento
        observer.observe(invitation);
    </script>
    <script>
        // Agrega la lluvia de papelitos al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const confettiContainers = document.querySelectorAll('.confetti-container');
            confettiContainers.forEach(container => {
                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('span');
                    confetti.classList.add('confetti');
                    confetti.style.left = Math.random() * 100 + '%';
                    confetti.style.animationDelay = Math.random() * 4 + 's';
                    container.appendChild(confetti);
                }
            });
        });
    </script>
</body>

</html>


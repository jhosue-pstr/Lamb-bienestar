<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lamb-Bienestar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
<!-- link fuente de  letra-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">

<!--background-image: url('{{ asset('imagenes/fondo1.jpg') }}');-->
    <style>
        body {
            background-color: #bed3e9;
            background-size: cover;
            color: #2fbd2fef;
        }
        .welcome-text {
            font-size: 4rem;
            font-weight: bold;
            margin-left: 20%;
            font-family: "DynaPuff", system-ui;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
        }
        .typing-effect {
            font-size: 3rem;
            border-right: 2px solid #343a40;
            white-space: nowrap;
            overflow: hidden;
            margin-left: 20%;
            font-family: "DynaPuff", system-ui;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
        }
        .container {
            padding-top: 15%;
        }
        .BotonIS{
            margin-left: 25%;
            margin-top: 3%;

        }


    </style>
</head>
<body>
    <img  src="{{  asset('imagenes/manzanita.jpeg') }}" alt="Logo" style="width: 20%;

    <div class="container ">
        <h1 class="welcome-text">Bienvenido</h1>
        <p class="typing-effect" id="typed-text"></p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-L8ANVTpHDFe78umUBrfDgfWcvsHUpCPicT9tQ5ZFTs0Pp1cF6I1n9pFvFMtbFEP6" crossorigin="anonymous"></script>
    <script>
        const text = "A tu Lamb-Bienestar.";
        const typingSpeed = 100;
        let index = 0;

        function type() {
            if (index < text.length) {
                document.getElementById("typed-text").innerHTML += text.charAt(index);
                index++;
                setTimeout(type, typingSpeed);
            }
        }

        window.addEventListener('load', () => {
            type();
        });
    </script>


    <button class="BotonIS animate-bounce ring-4 bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded shadow-lg transition duration-300">
        <a href="{{ route('login') }}"> Iniciar sesión</a>
    </button>



</body>
</html>

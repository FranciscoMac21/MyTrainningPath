<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>@yield('title') - My Training Path</title>

    <style>
        .fondo{
            height:100%;
            background: url("images/wall/fondo.jpg") no-repeat fixed center;
            background-size: cover;

        }

        .backAzul{
            background-color: #040018;
        }

        .colornav{
            background-color: #070024;
        }

        .colorcard{
            background-color: #3A249C;
        }

        .colorform{
            background-color: #14006D;
        }

        .imagenConPieDeTexto {
        background-color: #FFFFFF;
        }
        
        .imagenConPieDeTexto:hover {
            background-color: #00D1AE;
        }

        .color{
            background-color: #2C6EE9;
        }

        .fondoapp{
            height:100%;
            background: url("https://wallpapersmug.com/large/8195b5/highway-dark-minimal.jpg") no-repeat fixed center;
            background-size: cover;

        }

        .fondoperfilCard{
            height:100%;
            background: url("images/perfilContenido/cardPerfil.jpg");
            background-size: cover;

        }

        .cardper{
            height:100%;
            background: url("images/perfilContenido/cardper.jpg");
            background-size: cover;

        }

        .modalfondo{
            height:100%;
            background: url("images/perfilContenido/modal.jpg");
            background-size: cover;

        }

        .colorForm{
            background-color: #121B5B;
        }
    </style>
</head>
<body>

    @yield('content')
    

    <script type="text/javascript">
        (function(){
            var burger = document.querySelector('.burger');
            var nav = document.querySelector('#'+burger.dataset.target);

            burger.addEventListener('click', function(){
                burger.classList.toggle('is-active');
                nav.classList.toggle('is-active');
            })
        })();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
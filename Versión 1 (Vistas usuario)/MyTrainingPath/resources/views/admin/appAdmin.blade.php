<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - My Training Path</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <style>
        .color{
            background-color: #464A66;
        }

        .colorCont{
            background-color: #363953;
        }
    </style>
</head>

<body>

    <section class="colorCont">
        <!-- START NAV -->
        <div class="hero-head pb-6">
            <nav class="navbar is-fixed-top color">
                <div class="container is-black">
                    <div class="navbar-brand">
                        <div>
                        <img src="/images/logo/logoMTP.png" width="100px" alt="Logo">
                        </div>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-active" href="/mytrainingpath">
                                    <span>Home</span>
                                </a>
                            </span>

                            <div class="navbar-item has-dropdown is-hoverable is-black has-text-link">
                                <a class="navbar-link has-text-link">{{ auth()->user()->name}}</a>
                                <div class="navbar-dropdown is-black">
                                    <a class="navbar-item has-text-weight-bold">Profile</a>
                                    <hr class="navbar-divider">
                                    <div class="navbar-item is-black has-text-link has-text-weight-bold"><a href="{{ route('login.destroy') }}">Logout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END NAV -->
        <div class="pt-6">
            <div class="columns">
                <div class="column is-3 color">
                    <aside class="menu is-hidden-mobile">
                        <p class="menu-label has-text-white">
                            General
                        </p>
                        <ul class="menu-list">
                            <li><a class="is-active" href="{{Route('homeAdmin.index')}}">Dashboard</a></li>
                        </ul>
                        <p class="menu-label has-text-white">
                            Administration
                        </p>
                        <ul class="menu-list">
                            <li>
                                <a class="has-text-primary">Administrar Rutinas</a>
                            <ul>
                                <li><a class="has-text-link"  href="{{Route('adminRutinas.index')}}">Semana de prueba</a></li>
                                <li><a class="has-text-link"  href="">Rutinas Fáciles</a></li>
                                <li><a class="has-text-link"  href="">Rutinas Intermedias</a></li>
                                <li><a class="has-text-link"  href="">Rutinas Avanzado</a></li>
                            </ul>
                        </li>
                            <li><a class="has-text-primary">Invitations</a></li>
                            <li><a class="has-text-primary">Authentication</a></li>
                            <li><a class="has-text-primary">Payments</a></li>
                        </ul>
                        <p class="menu-label has-text-white">
                            Transactions
                        </p>
                        <ul class="menu-list">
                            <li><a class="has-text-primary">Payments</a></li>
                            <li><a class="has-text-primary">Transfers</a></li>
                            <li><a class="has-text-primary">Balance</a></li>
                            <li><a class="has-text-primary">Reports</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="column is-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    
    <script async type="text/javascript" src="../js/bulma.js"></script>
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
</body>

</html>
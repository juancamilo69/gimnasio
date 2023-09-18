@role('administrador')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reich GYM</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/plantilla-viewAdmin.Css') }}">
    <!-- Default -->
    @extends('default')

    <!-- Bootstrap -->
    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
{{-- Logo, foto de perfil, nombre y cargo. --}}
    <div class="sidebar-og">
        <div class="top">
            <div class="logo">
                <i class='bx bx-dumbbell'></i>
                <span>GYM-REICH</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="user">
            <img src="https://i.seadn.io/gae/X9cGg3uZBYkgT-lXtheNveeOX1qUQ2K3nMPMMbBfcUnPMv5Legm5_pAPxOoqSujh7heg6bN5rZYL8cpg3PkVU2Yor56ZGJ4hTrWU0-0?auto=format&dpr=1&w=1000" alt="me" class="user-img">
            <div class="user-texto">
                <p class="bold p-role">{{ Auth::user()->name }}</p>
                <p>Admin</p>
            </div>
        </div>
<!-- {{-- Lista o menu. --}} -->    
        <ul class="contenedor-nav">
            <li>
                <a href="{{route ('clientes')}}">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item-span">Clientes</span>
                </a>
                <span class="tooltip-og">Clientes</span>
            </li>
            <li>
                <a href="{{route ('maquinas')}}">
                    <i class="fa-solid fa-person-biking"></i>
                    <span class="nav-item-span">Máquinas</span>
                </a>
                <span class="tooltip-og">Máquinas</span>
            </li>
            <li>
                <a href="{{route ('elementos')}}">
                    <i class="fa-solid fa-dumbbell"></i>
                    <span class="nav-item-span">Elementos</span>
                </a>
                <span class="tooltip-og">Elementos</span>
            </li>
            <li>
                <a href="{{route ('suplementosAdmin')}}">
                    <i class="fa-solid fa-jar"></i>
                    <span class="nav-item-span">Suplementos</span>
                </a>
                <span class="tooltip-og">Suplementos</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-shirt"></i>
                    <span class="nav-item-span">Ropa</span>
                </a>
                <span class="tooltip-og">Ropa</span>
            </li>
            <li>
                <a href="{{route ('dashboard')}}">
                    <i class="fa-solid fa-right-from-bracket fa-flip-horizontal"></i>
                    <span class="nav-item-span">Logout</span>
                </a>
                <span class="tooltip-og">Logout</span>
            </li>
        </ul>
    </div>
<!-- {{-- Contenido de la pagina. --}} -->
    <div class="main-content">
        @yield('contenido')
    </div>

</body>
<!-- {{-- Js de la pagina. --}} -->
<script>
    let btn = document.querySelector('#btn')
    let sidebar = document.querySelector('.sidebar-og')

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };

</script>

</html>

@endrole
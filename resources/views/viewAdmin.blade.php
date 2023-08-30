@role('administrador')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reich GYM</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/viewAdmin.Css') }}">
    <!-- Default -->
    @extends('default')

    <!-- Bootstrap -->
    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
{{-- Logo, foto de perfil, nombre y cargo. --}}
    <div class="sidebar">
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
                    <i class="bx bxs-user"></i>
                    <span class="nav-item">Clientes</span>
                </a>
                <span class="tooltip">Clientes</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cycling"></i>
                    <span class="nav-item">Máquinas</span>
                </a>
                <span class="tooltip">Máquinas</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-component"></i>
                    <span class="nav-item">Elementos</span>
                </a>
                <span class="tooltip">Elementos</span>
            </li>
            <li>
                <a href="{{route ('dashboard')}}">
                    <i class="bx bx-log-out"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>
<!-- {{-- Contenido de la pagina. --}} -->
    <div class="main-content">
        <div class="contenedor">
            <h1>GYM-REICH</h1>
        </div>
    </div>

</body>
<!-- {{-- Js de la pagina. --}} -->
<script>
    let btn = document.querySelector('#btn')
    let sidebar = document.querySelector('.sidebar')

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };

</script>

</html>

@endrole
<style>
    .navbar {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        border-radius: 0 0 20px 20px;
        /* Membuat sudut bawah melengkung */
        padding: 15px 30px;
        /* Menambah ruang di dalam navbar */
    }

    li {
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    a {
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    .navbar-nav .nav-link {
        transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover {
        color: #fff;
        background-color: #ff6600;
        /* Warna saat dihover */
        border-radius: 10px;
        /* Membuat tombol membulat saat hover */
    }

    .navbar-brand,
    .nav-link {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .navbar-toggler {
        background-color: rgba(255, 174, 0, 0.9);
        /* Warna oranye sesuai tema */
        border-radius: 5px;
        padding: 8px 12px;
    }

    .navbar-toggler:focus,
    .navbar-toggler:hover {
        background-color: rgba(255, 165, 0, 1);
        /* Warna saat hover */
    }

    .navbar-toggler-icon {
        filter: brightness(0) invert(1);
        /* Mengubah warna menjadi putih */
    }

    .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='3' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}



    #particles-js {
        position: absolute;
        /* Menggunakan absolute agar tidak menutupi navbar */
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
        /* Pastikan particles di belakang semua elemen */
        background: linear-gradient(to right, #ff9900, #ff6600);
        /* Gradasi warna */
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<body>

    <div id="particles-js"></div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="img/atl.jpg" class="rounded-circle float-start me-3 img-fluid" width="95px" height="95px"
                alt="...">
            <a class="navbar-brand" href="/">AttenDoList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/games">Quiz</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Action</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    <li>
                                        @if (auth()->check() && auth()->user()->type === 1)
                                            <a class="dropdown-item" href="/admin/reviews">Review</a>
                                        @endif
                                    </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item btn me-2">
                                            <span>Logout</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <button id="loginButton" class="btn me-2" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</button>
                        </li>
                        <li class="nav-item">
                            <button id="registerButton" class="btn me-2" data-bs-toggle="modal"
                                data-bs-target="#registerModal">Register</button>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="btn" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>
</head>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80
            },
            "size": {
                "value": 2
            },
            "color": {
                "value": "#ffa500"
            },
            "move": {
                "speed": 0.6
            }
        },
        "interactivity": {
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                }
            }
        }
    });
</script>

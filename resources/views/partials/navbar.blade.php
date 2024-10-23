<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <img src="img/atl.jpg" class="rounded-circle float-start me-3 img-fluid" width="95px" height="95px"
            alt="...">
        <a class="navbar-brand" href="#">AttenDoList</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white btn me-2">
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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

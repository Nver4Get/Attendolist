<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="img/atdl.jpeg" class="rounded-circle float-start me-3 img-fluid" width="95px" height="95px"
            alt="...">
        <a class="navbar-brand" href="#">AttenDoList</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">More Action</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

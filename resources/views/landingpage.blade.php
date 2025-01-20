@extends('main.main')
@section('mainContent')
    <style>

    </style>
    </head>

    <body>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section class="hero-section">
            <div class="container">
                <h1 class="welcome">Welcome to AttenDoList</h1>
                <p class="text-light">This is where Attendence filling and tasks progress can be monitored</p>
                <a href="#about" class="btn btn-primary btn-lg">About</a>
            </div>
        </section>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="emaillog" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emaillog" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordlog" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordlog" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Register</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <section id="about" class="features-section">
            <div class="container">
                <div class="row text-center">
                    <i class="bi bi-globe" style="font-size: 2rem;"></i>
                    <h3> <a href="#">ABOUT US</a></h3>
                    <p>
                        AttenDoList is a website that is useful for making todo lists. In addition, it is also used to record reports on the results of tasks that have been completed. We also work with several Game Web Developers, where on this site you can play games that have been provided. So here you will not be bored because of assignments alone, because there are many mini games available
                    </p>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-light py-5 donation">
            <div class="container text-center">
                <h2>Our Features</h2>
                <p>Try our features for free</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Quiz</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <img src="img/quiz.jpg" alt="quiz" style="width: 150px; height: 150px;">
                                </ul>
                                <a href="/quiz" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Add Task & Report</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <img src="img/task&report.png" alt="quiz" style="width: 150px; height: 150px;">
                                </ul>
                                <a href="/dashboard" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Download Your Data</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <img src="img/th (14).jpg" alt="quiz" style="width: 150px; height: 150px;">
                                </ul>
                                <a href="{{ auth()->check() ? route('profile', ['id' => auth()->user()->id]) : route('login-notice') }}"
                                    class="btn btn-primary">
                                    Click Here
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-5 contact">
            <div class="container text-center">
                <h2>Contact Us</h2>
                <p>Have any questions? We'd love to hear from you.</p>
                <form class="row g-3 justify-content-center" action="{{ route('review.store') }}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="5" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
    @endsection

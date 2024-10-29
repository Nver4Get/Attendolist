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

        <section class="hero-section">
            <div class="container">
                <h1 class="welcome">Welcome to AttenDoList</h1>
                <p class="text-dark">This is where Attendence filling and tasks progress can be monitored</p>
                <a href="#features" class="btn btn-primary btn-lg">About</a>
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
        <section id="features" class="features-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <i class="bi bi-globe" style="font-size: 2rem;"></i>
                        <h3> <a href="">Quiz</a></h3>
                        <p>Add your knowledge</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-lightning" style="font-size: 2rem;"></i>
                        <h3><a href="">Community</a></h3>
                        <p>Make your own Community</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-shield" style="font-size: 2rem;"></i>
                        <h3><a href="">Mini Game</a></h3>
                        <p>Having fun with mini game</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-light py-5">
            <div class="container text-center">
                <h2>Support</h2>
                <p>Choose your budget to support us.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Regular</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title">$5</h1>
                                <ul class="list-unstyled">
                                    <li>5 Dollars</li>
                                    <li>For Snacks</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Rich</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title">$9.99</h1>
                                <ul class="list-unstyled">
                                    <li>9.99 Dollars</li>
                                    <li>For Coffee</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Crazy Rich</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title">$19.99</h1>
                                <ul class="list-unstyled">
                                    <li>19.99 Dollars</li>
                                    <li>For Charty</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-5">
            <div class="container text-center">
                <h2>Contact Us</h2>
                <p>Have any questions? We'd love to hear from you.</p>
                <form class="row g-3 justify-content-center">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p>&copy; 2024 AttenDoList. All rights reserved.</p>
            </div>
        </footer>
    @endsection

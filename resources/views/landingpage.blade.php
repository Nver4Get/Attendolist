@extends('main.main')
@section('mainContent')

<style>
    /* Custom CSS */
    .hero-section {
        background: url('https://source.unsplash.com/1600x900/?nature,water') no-repeat center center;
        background-size: cover;
        height: 100vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero-section h1 {
        font-size: 4rem;
    }

    .hero-section p {
        font-size: 1.5rem;
    }

    .features-section {
        padding: 50px 0;
    }

    .footer {
        background-color: #333;
        color: white;
        padding: 30px 0;
        text-align: center;
    }
</style>
</head>

<body>

<!-- Navbar -->

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="text-dark">Welcome to AttenDoList</h1>
        <p class="text-dark">This is where Attendence filling and tasks progress can be monitored</p>
        <a href="#features" class="btn btn-primary btn-lg">Learn More</a>
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
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
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
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
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
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
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
                <h3>Global Reach</h3>
                <p>We connect people and businesses worldwide.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-lightning" style="font-size: 2rem;"></i>
                <h3>Fast & Reliable</h3>
                <p>Enjoy fast and reliable services 24/7.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-shield" style="font-size: 2rem;"></i>
                <h3>Secure & Trusted</h3>
                <p>Your security and privacy are our top priority.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="bg-light py-5">
    <div class="container text-center">
        <h2>Pricing Plans</h2>
        <p>Choose a plan that fits your needs.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">$9.99</h1>
                        <ul class="list-unstyled">
                            <li>5 Projects</li>
                            <li>10GB Storage</li>
                            <li>Email Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Standard</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">$19.99</h1>
                        <ul class="list-unstyled">
                            <li>10 Projects</li>
                            <li>50GB Storage</li>
                            <li>Priority Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Premium</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">$29.99</h1>
                        <ul class="list-unstyled">
                            <li>Unlimited Projects</li>
                            <li>100GB Storage</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
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
        <p>&copy; 2024 MyWebsite. All rights reserved.</p>
    </div>
</footer>

@endsection

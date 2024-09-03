  <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="mt-5">

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">All Films Here</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            All Films Here is a website where you can watch/stream movies for free. In addition, you can
                            also download movies with the best quality graphics.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Page</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="/" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="/about" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="/support" class="text-white">Support</a>
                        </p>
                        @can('admin')
                            <p>
                                <a href="/dashboard" class="text-white">Dashboard</a>
                            </p>
                        @endcan

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="/help" class="text-white">Help</a>
                        </p>
                        <p>
                            <a href="/support" class="text-white">Support</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i><a
                                href="https://www.google.com/maps?q=Malang,%20ML%2012345,%20ID" target="_blank"
                                style="text-decoration:none" class="text-white"> Malang,
                                ML 12345, ID</a></p>

                        <p><i class="fas fa-envelope mr-3"></i><a href="mailto:funeraldiner6@gmail.com"
                                class="text-white" style="text-decoration:none">
                                Contact Me</a></p>
                        <p><i class="fas fa-envelope mr-3"></i><a href="mailto:Pmahardika260@gmail.com"
                                class="text-white" style="text-decoration:none">
                                Contact Admin</a></p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">All Films Here</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>
<!-- End of .container -->

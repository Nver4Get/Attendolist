<div class="footer">
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links -->
      <section>
        <div class="text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 d-flex flex-column align-items-center align-items-md-start">
              <img src="img/atdl.jpeg" class="rounded-circle img-fluid footer-img mb-3" width="95px" height="95px" alt="...">
              <div class="text-center text-md-start">
                <h6 class="text-uppercase fw-bold">AttenDoList</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p>
                 AttenDoList is a website-based application used to fill in attendance, assignments and task progress for work or school.
                </p>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column for Page links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Page</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><a href="/" class="text-white">Home</a></p>
              <p><a href="/about" class="text-white">About</a></p>
              <p><a href="/support" class="text-white">Support</a></p>
              @can('admin')
                <p><a href="/dashboard" class="text-white">Dashboard</a></p>
              @endcan
            </div>

            <!-- Grid column for Useful links -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><a href="/help" class="text-white">Help</a></p>
              <p><a href="/support" class="text-white">Game</a></p>
            </div>

            <!-- Grid column for Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><i class="fas fa-home mr-3"></i><a href="https://www.google.com/maps?q=Malang,%20ML%2012345,%20ID" target="_blank" style="text-decoration:none" class="text-white"> Malang, ML 12345, ID</a></p>
              <p><i class="fas fa-envelope mr-3"></i><a href="mailto:funeraldiner6@gmail.com" class="text-white" style="text-decoration:none"> Contact Me</a></p>
              <p><i class="fas fa-envelope mr-3"></i><a href="mailto:Pmahardika260@gmail.com" class="text-white" style="text-decoration:none"> Contact Admin</a></p>
            </div>
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">AttenDoList</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>

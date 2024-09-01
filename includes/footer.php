
  <!-- footer -->
  <footer class="bg-dark text-light py-5">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-5 mb-5">
          <img src="assets/images/logo-sm-d.svg" alt="Logo">
          <p class="mt-4">Empowering digital growth with innovative, tailored solutions in eCommerce, UI/UX, SAP, Adobe, and Java development.</p>
        </div>
        <div class="col-lg-6 ms-auto text-end mb-5">
          <nav class="mb-5">
            <ul class="d-inline-flex list-inline mb-2 mb-lg-0 fw-semibold">
              <li class="px-3">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="px-3">
                <a class="nav-link" href="about-us.php">About</a>
              </li>
              <li class="px-3">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="px-3">
                <a class="nav-link" href="#careerModal" data-bs-toggle="modal">Career</a>
              </li>
              <li class="px-3">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </nav>
          <nav>
            <ul class="d-inline-flex list-inline mb-2 mb-lg-0 fw-semibold">
            <?php /*<li class="px-2">
                <a class="nav-link"><img src="assets/icons/linkedin-l.svg" /></a>
              </li> */ ?>
              <li class="px-2">
                <a class="nav-link" href="https://www.facebook.com/hiteshtechnologies" target="_blank"><img src="assets/icons/facebook-l.svg" /></a>
              </li>
              <li class="px-2">
                <a class="nav-link" href="https://www.instagram.com/hitesh.technologies/" target="_blank"><img src="assets/icons/instagram-l.svg" /></a>
              </li>
              <?php /*<li class="px-2">
                <a class="nav-link" href="#"><img src="assets/icons/twitter-l.svg" /></a>
              </li> */ ?>
            </ul>
          </nav>
        </div>
      </div>
      <p class="text-center border-top pt-5 mb-0 border-secondary-subtle">&copy; Copyright 2024.</p>
    </div>
  </footer>

  <!-- modal -->
  <div class="modal fade" id="careerModal" aria-hidden="true" aria-labelledby="careerModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content position-absolute">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="careerModalToggleLabel">Send Your Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="careerForm" class="needs-validation" novalidate>
          <div class="mb-3">
              <label for="name" class="form-label">Full Name *</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
              <div class="invalid-feedback">
                  Please enter your full name.
              </div>
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email *</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
              <div class="invalid-feedback">
                  Please enter a valid email address.
              </div>
          </div>
          <div class="mb-3">
              <label for="url" class="form-label">Portfolio Url</label>
              <input type="url" name="url" class="form-control" id="url" placeholder="Enter URL">
              <div class="invalid-feedback">
                  Please enter a valid URL.
              </div>
          </div>
          <div class="mb-3">
              <label for="file" class="form-label">Attach Your Resume *</label>
              <input type="file" name="file" class="form-control" id="file" required>
              <div class="small text-muted">Only PDF's and word document are accepted.</div>
              <div class="invalid-feedback">
                  Please attach your resume.
              </div>
          </div>
          <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
          </div>
          <div class="mb-3 text-end">
              <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
      <div class="loader position-absolute top-0 bottom-0 start-0 end-0 bg-light d-none" style="opacity: 0.6;">
        <div class="spinner-grow position-absolute top-50 start-50 translate-middle" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- scripts -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
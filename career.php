<?php require_once('includes/header.php') ?>

  <!-- main -->
  <main>
    <!-- hero -->
    <section class="d-flex my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="border-2 border-top border-primary mt-5 mb-5 w-80"></div>
            <h2 class="display-3 m-0 fw-semibold">Career</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-md-3">
            <div class="border-top mt-3 my-md-5"></div>
          </div>
          <div class="col-md-8">
            <h3 class="fs-2 m-0 mt-3 my-md-5 fw-light">Join our dynamic team where creativity meets technology. We are on the lookout for talented individuals who thrive in a collaborative environment and are excited to push their boundaries.</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- hire us -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-5 mb-4">
            <div class="border-2 border-top border-primary mt-5 mb-5 w-80"></div>
            <h2 class="display-3 mb-5 fw-semibold">Become a Part of Our Creative Team</h2>
            <p>We review each submission thoroughly by assessing your skills, experience, and portfolio to determine suitability for our roles; if your profile aligns with our needs, we will reach out to you for further discussions and next steps.</p>
          </div>
          <div class="col-lg-6 offset-lg-1 mt-5">
            <div id="careerFormWrapper">
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
                    <label for="url" class="form-label">Portfolio Url (Optional)</label>
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
                    <label for="message" class="form-label">Message (Optional)</label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
                <div class="loader position-absolute top-0 bottom-0 start-0 end-0 bg-light d-none" style="opacity: 0.6;">
                  <div class="spinner-grow position-absolute top-50 start-50 translate-middle" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- connect -->
    <?php require_once('includes/project-on-mind.php') ?>
  </main>

<?php require_once('includes/footer.php') ?>
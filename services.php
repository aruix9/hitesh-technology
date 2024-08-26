<?php require_once('includes/header.php') ?>

  <!-- main -->
  <main>
    <!-- hero -->
    <section class="d-flex my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="border-2 border-top border-primary mt-5 mb-5 w-80"></div>
            <h2 class="display-3 m-0 fw-semibold">Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-md-3">
            <div class="border-top mt-3 my-md-5"></div>
          </div>
          <div class="col-md-8">
            <h3 class="fs-2 m-0 mt-3 my-md-5 fw-light">We deliver exceptional work that turns your vision into reality. Let's build something extraordinary together.</h3>
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
            <h2 class="display-3 mb-5 fw-semibold">Take Your Business to the next Level</h2>
            <p>Elevate your business to new heights with our expert digital solutions, designed to transform your vision into reality and propel your growth to the next level of success and innovation.</p>
          </div>
          <div class="col-lg-6 offset-lg-1 mt-5">
            <div class="row mx-0">
              <div class="col-lg-6 mb-4">
                <div class="bg-light-subtle p-3">                  
                  <?php include_once('includes/speciality/ecommerce.php'); ?>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="bg-light-subtle p-3">
                  <?php include_once('includes/speciality/uiux.php'); ?>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="bg-light-subtle p-3">
                  <?php include_once('includes/speciality/sap.php'); ?>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="bg-light-subtle p-3">
                  <?php include_once('includes/speciality/adobe.php'); ?>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="bg-light-subtle p-3">
                  <?php include_once('includes/speciality/java.php'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- connect -->
    <?php require_once('includes/project-on-mind.php') ?>
  </main>

<?php require_once('includes/footer.php') ?>
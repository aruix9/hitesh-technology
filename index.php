<?php require_once('includes/header.php') ?>

  <!-- main -->
  <main>
    <!-- hero -->
    <section class="d-flex align-items-center min-vh">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="border-2 border-top border-primary mb-5 w-80"></div>
            <h2 class="display-1 m-0 fw-semibold">Leading Your Business to Success Through Digital Excellence</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-md-3">
            <div class="border-top mt-3 my-md-5"></div>
          </div>
          <div class="col-md-8">
            <h3 class="fs-2 m-0 mt-3 my-md-5 fw-light">If you're seeking a partner to elevate your online presence, you've found the right team. We're here to propel your business to new heights.</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- specialize -->
    <section class="py-5 bg-light mt-5">
      <?php require_once('includes/our-specialties.php') ?>
    </section>

    <!-- about us -->
    <section class="py-5 mb-5">
      <div class="container">
        <div class="row mt-5 align-items-center">
          <div class="col-lg-6">
            <div class="border-2 border-top border-primary mt-5 mb-5 w-80"></div>
            <h2 class="display-3 mb-3 fw-semibold">About Us</h2>
            <h4 class="mb-5 fw-normal">We drive digital transformation with expertise in eCommerce, UI/UX, SAP, Adobe, and Java, delivering tailored solutions to empower businesses and achieve their goals.</h4>
            <a href="about-us.php" class="btn btn-dark px-3">Explore More</a>
          </div>
          <div class="col-md-5 d-none d-lg-block offset-md-1">
            <img src="./assets/images/about-us.jpg" alt="About Hitesh Technologies" class="img-fluid object-fit-cover">
          </div>
      </div>
    </section>

    <!-- connect -->
    <?php require_once('includes/project-on-mind.php') ?>
  </main>

<?php require_once('includes/footer.php') ?>
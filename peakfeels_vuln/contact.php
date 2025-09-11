<?php
// Page variables
$pageTitle = "Peak Feels - Contact";
$bannerImage = "assets/img/people.jpg";
?>

<?php include('partials/header.php'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $bannerImage; ?>')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="page-heading">
          <h1>Contact Peak Feels</h1>
          <span class="subheading">Got a story, idea, or just want to say namaste?</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<main class="mb-4">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <p>Let’s connect! Whether it’s about Himalayan adventures, city vibes, or just sharing some Peak Feels, drop me a message below 👇</p>
        <div class="my-5">
          <!-- Contact Form -->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="form-floating">
              <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
              <label for="name">Name</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <div class="form-floating">
              <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
              <label for="email">Email address</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <div class="form-floating">
              <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
              <label for="phone">Phone Number</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
            <div class="form-floating">
              <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
              <label for="message">Message</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
            <br />
            <!-- Submit success message -->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">Thanks for reaching out!</div>
                I’ll get back to you soon with some Peak Feels ✨
              </div>
            </div>
            <!-- Submit error message -->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button -->
            <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include('partials/footer.php'); ?>

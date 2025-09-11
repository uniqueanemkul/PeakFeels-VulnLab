<?php
$pageTitle = "PeakFeels - Ping Demo";
include('partials/header.php');

$output = "";
if (isset($_GET['host'])) {
    $host = $_GET['host']; // Vulnerable: no sanitization
    // Unsafe execution
    $output = shell_exec("ping -c 3 " . $host);
}
?>

<header class="masthead" style="background-image: url('assets/img/nepal.png');">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1>Ping a Host</h1>
          <span class="subheading">Demo of Command Injection vulnerability</span>
        </div>
      </div>
    </div>
  </div>
</header>

<main class="mb-4">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">

        <form method="get" action="ping.php" class="mb-4">
          <div class="form-floating mb-3">
            <input class="form-control" type="text" name="host" id="host" placeholder="Enter hostname">
            <label for="host">Enter a hostname to ping</label>
          </div>
          <button class="btn btn-primary text-uppercase" type="submit">Ping</button>
        </form>

        <?php if ($output != ""): ?>
            <pre style="background:#f8f9fa;padding:10px;border-radius:5px;"><?php echo $output; ?></pre>
        <?php endif; ?>

      </div>
    </div>
  </div>
</main>

<?php include('partials/footer.php'); ?>


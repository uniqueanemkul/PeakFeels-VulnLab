<?php
$pageTitle = "PeakFeels - File Viewer";
include('partials/header.php');

if (isset($_GET['file'])) {
    $file = $_GET['file']; // Vulnerable: no sanitization
    $content = @file_get_contents("uploads/" . $file);
}
?>

<header class="masthead" style="background-image: url('assets/img/files.jpg')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1>File Viewer</h1>
          <span class="subheading">Demo of Directory Traversal vulnerability</span>
        </div>
      </div>
    </div>
  </div>
</header>

<main class="mb-4">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">

        <form method="get" action="view.php" class="mb-4">
          <div class="form-floating mb-3">
            <input class="form-control" type="text" name="file" id="file" placeholder="Enter filename">
            <label for="file">Enter a file name from uploads/</label>
          </div>
          <button class="btn btn-primary text-uppercase" type="submit">View File</button>
        </form>

        <?php if (!empty($content)): ?>
          <pre style="background:#f8f9fa;padding:10px;border-radius:5px;"><?php echo htmlspecialchars($content); ?></pre>
        <?php elseif (isset($_GET['file'])): ?>
          <p class="text-danger">File not found or unreadable.</p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</main>

<?php include('partials/footer.php'); ?>


<?php
$pageTitle = "PeakFeels - File Upload";
include('partials/header.php');

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $message = "<p class='text-success'>Upload successful! <a href='$target_file' target='_blank'>Open File</a></p>";
    } else {
        $message = "<p class='text-danger'>Upload failed!</p>";
    }
}
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/img/nepal.png');">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Upload a File</h1>
                    <span class="subheading">Demo of Unrestricted File Upload vulnerability</span>
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

                <?php if ($message != "") echo $message; ?>

                <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-4">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                        <label for="fileToUpload">Choose a file to upload</label>
                    </div>
                    <button type="submit" class="btn btn-primary text-uppercase">Upload File</button>
                </form>

             

            </div>
        </div>
    </div>
</main>

<?php include('partials/footer.php'); ?>


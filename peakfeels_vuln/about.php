<?php
// Define page variables
$pageTitle = "Peak Feels - About";
$bannerImage = "assets/img/Trekking.webp";

// Define blog posts or highlights for About page
$posts = array(
    array(
        "title" => "Our Journey",
        "subtitle" => "From the valleys of Nepal to your screen, sharing stories of mountains and moments.",
        "author" => "Peak Feels",
        "date" => "September 6, 2025",
        "link" => "post.php"
    ),
    array(
        "title" => "Culture & Adventure",
        "subtitle" => "Experiencing Nepali culture while trekking across breathtaking landscapes.",
        "author" => "Peak Feels",
        "date" => "September 4, 2025",
        "link" => "post.php"
    ),
    array(
        "title" => "Our Philosophy",
        "subtitle" => "Celebrating small wins, mindful living, and peak experiences.",
        "author" => "Peak Feels",
        "date" => "September 2, 2025",
        "link" => "post.php"
    )
);
?>

<?php include('partials/header.php'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $bannerImage; ?>')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1>About Peak Feels</h1>
          <span class="subheading">Mountains, culture, and moments that matter.</span>
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

        <?php foreach($posts as $post): ?>
        <div class="post-preview">
          <a href="<?php echo $post['link']; ?>">
            <h2 class="post-title"><?php echo $post['title']; ?></h2>
            <h3 class="post-subtitle"><?php echo $post['subtitle']; ?></h3>
          </a>
          <p class="post-meta">Posted by <a href="#"><?php echo $post['author']; ?></a> on <?php echo 
$post['date']; ?></p>
        </div>
        <hr />
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</main>

<?php include('partials/footer.php'); ?>


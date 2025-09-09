<?php
// Page variables
$pageTitle = "Peak Feels - Home";

// Header background image
$headerImage = "assets/img/nepal.png";

// Blog posts array
$posts = array(
    array(
        "title" => "Mountain Vibes",
        "subtitle" => "Trekking the Himalayas and catching views that hit different.",
        "image" => "assets/img/mountain_vibes.jpg", // no spaces
        "date" => "September 6, 2025"
    ),
    array(
        "title" => "Chiya & Chill",
        "subtitle" => "Rooftops of Kathmandu and the perfect cup of chai to vibe with.",
        "image" => "assets/img/chiya.jpg",
        "date" => "September 4, 2025"
    ),
    array(
        "title" => "Urban Beats",
        "subtitle" => "Exploring the rhythm of Nepali city streets and hidden gems.",
        "image" => "assets/img/urban.jfif",
        "date" => "September 2, 2025"
    ),
    array(
        "title" => "Peak Moments",
        "subtitle" => "Reflections, small wins, and mountain-inspired thoughts.",
        "image" => "assets/img/peak.webp",
        "date" => "August 30, 2025"
    )
);
?>

<?php include('partials/header.php'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $headerImage; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Peak Feels</h1>
                    <span class="subheading">Mountains, culture, and moments that hit different</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php if(!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="post-preview">
                        <a href="post.php?title=<?php echo urlencode($post['title']); ?>">
                            <img src="<?php echo $post['image']; ?>" alt="<?php echo 
htmlspecialchars($post['title']); ?>" class="img-fluid mb-3 rounded">
                            <h2 class="post-title"><?php echo $post['title']; ?></h2>
                            <h3 class="post-subtitle"><?php echo $post['subtitle']; ?></h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Peak Feels</a> on <?php echo 
$post['date']; ?></p>
                    </div>
                    <hr />
                <?php endforeach; ?>
            <?php else: ?>
                <p>No posts available.</p>
            <?php endif; ?>

            <!-- Pager -->
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary text-uppercase" href="post.php">Older Posts →</a>
            </div>
        </div>
    </div>
</div>

<?php include('partials/footer.php'); ?>


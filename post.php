<?php
// Post data
$post = array(
    "title" => "Mountain Vibes: A Trek Through the Himalayas",
    "subtitle" => "Finding peace, chai, and cloud-kissed peaks",
    "author" => "Peak Feels",
    "date" => "September 6, 2025",
    "header_image" => "assets/img/hike.webp",
    "content" => array(
        array(
            "type" => "paragraph",
            "text" => "The Himalayas are not just mountains—they are a feeling, a rhythm that courses 
through every step of the trek. From the dusty streets of Kathmandu to misty trails where prayer flags 
flutter, every journey is a story waiting to unfold."
        ),
        array(
            "type" => "paragraph",
            "text" => "Each morning begins with the aroma of chai and the laughter of locals, guiding 
travelers to hidden villages and spectacular vistas. The peaks remind us that every climb—literal or 
metaphorical—comes with a reward worth reaching for."
        ),
        array(
            "type" => "heading",
            "text" => "The Chiya Stops"
        ),
        array(
            "type" => "paragraph",
            "text" => "Midway through the trek, there’s always a tea house that feels like home. Sipping 
warm tea while clouds drift past the mountains, you realize the simple moments often carry the deepest joy."
        ),
        array(
            "type" => "blockquote",
            "text" => "\"At the peak, the air is thinner, the views wider, and every breath feels like a 
story in itself.\""
        ),
        array(
            "type" => "paragraph",
            "text" => "Walking along trails carved centuries ago, every step is a lesson in patience and 
presence. The Himalayas teach humility, reminding us that nature is the ultimate storyteller."
        ),
        array(
            "type" => "heading",
            "text" => "Capturing Moments"
        ),
        array(
            "type" => "paragraph",
            "text" => "Photos, sketches, and memories all try to hold the magic of a fleeting sunset or the 
serenity of a quiet village. The blog exists to share these “Peak Feels”—moments that hit different, whether 
near the mountains or in the heart of Kathmandu."
        ),
        array(
            "type" => "image",
            "src" => "assets/img/sunset.jpg",
            "alt" => "Sunset Trek",
            "caption" => "A sunset that reminds us why we trek, explore, and feel."
        ),
        array(
            "type" => "paragraph",
            "text" => "Through each story, Peak Feels captures the highs, lows, and little discoveries of 
life along the trails. May your journey be as vivid, inspiring, and heartfelt as the peaks themselves."
        )
    )
);
?>

<?php include('partials/header.php'); ?>

<!-- Post Header -->
<header class="masthead" style="background-image: url('<?php echo $post['header_image']; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $post['title']; ?></h1>
                    <h2 class="subheading"><?php echo $post['subtitle']; ?></h2>
                    <span class="meta">Posted by <a href="#!"><?php echo $post['author']; ?></a> on <?php 
echo $post['date']; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
<?php
// Reflected XSS demo
if (isset($_GET['comment'])) {
    $comment = $_GET['comment']; // Vulnerable: no sanitization
    echo "<p style='color:red'><strong>User comment:</strong> $comment</p>";
}
?>
                <?php foreach ($post['content'] as $section): ?>
                    <?php if ($section['type'] === 'paragraph'): ?>
                        <p><?php echo $section['text']; ?></p>
                    <?php elseif ($section['type'] === 'heading'): ?>
                        <h2 class="section-heading"><?php echo $section['text']; ?></h2>
                    <?php elseif ($section['type'] === 'blockquote'): ?>
                        <blockquote class="blockquote"><?php echo $section['text']; ?></blockquote>
                    <?php elseif ($section['type'] === 'image'): ?>
                        <a href="#!"><img class="img-fluid" src="<?php echo $section['src']; ?>" alt="<?php 
echo $section['alt']; ?>" /></a>
                        <span class="caption text-muted"><?php echo $section['caption']; ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
<hr>
<h3>Leave a Comment</h3>
<form method="GET" action="post.php">
    <input type="text" name="comment" placeholder="Type your comment here..." style="width:60%;padding:5px;">
    <button type="submit">Submit</button>
</form>

            </div>
        </div>
    </div>
</article>

<?php include('partials/footer.php'); ?>


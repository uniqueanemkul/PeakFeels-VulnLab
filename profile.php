<?php
$pageTitle = "PeakFeels - User Profiles";
include('partials/header.php');

// Simulated database with sensitive info
$users = array(
    1 => array("name"=>"Alice","email"=>"alice@peakfeels.com","role"=>"admin","phone"=>"555-1111","address"=>"123 Admin Street","ssn"=>"111-22-3333","salary"=>"$120,000"),
    2 => array("name"=>"Bob","email"=>"bob@peakfeels.com","role"=>"user","phone"=>"555-2222","address"=>"456 User Lane","ssn"=>"222-33-4444","salary"=>"$60,000"),
    3 => array("name"=>"Charlie","email"=>"charlie@peakfeels.com","role"=>"user","phone"=>"555-3333","address"=>"789 User Avenue","ssn"=>"333-44-5555","salary"=>"$55,000")
);

// Get the ID from GET parameters
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Simulate SQL Injection / IDOR
$results = array();
if (preg_match('/^\d+$/', $id) && isset($users[$id])) {
    $results[] = $users[$id];
} elseif (strtoupper(trim($id)) == "1 OR 1=1") {
    $results = $users;
}
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/img/nepal.png');">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>User Profiles</h1>
                    <span class="subheading">Demo of SQL Injection & IDOR vulnerabilities</span>
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

                <!-- Input Form -->
                <form method="get" action="profile.php" class="mb-4">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" id="id" name="id" placeholder="Enter User ID">
                        <label for="id">Enter User ID</label>
                    </div>
                    <button class="btn btn-primary text-uppercase" type="submit">View Profile</button>
                </form>

                <!-- Display Results -->
                <?php
                if (!empty($results)) {
                    foreach ($results as $user) {
                        echo "<div class='card mb-3'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>" . $user['name'] . "</h3>";
                        echo "<p><strong>Email:</strong> " . $user['email'] . "</p>";
                        echo "<p><strong>Role:</strong> " . $user['role'] . "</p>";
                        echo "<p><strong>Phone:</strong> " . $user['phone'] . "</p>";
                        echo "<p><strong>Address:</strong> " . $user['address'] . "</p>";
                        echo "<p><strong>SSN:</strong> " . $user['ssn'] . "</p>";
                        echo "<p><strong>Salary:</strong> " . $user['salary'] . "</p>";
                        echo "</div></div>";
                    }
                } elseif ($id != '') {
                    echo "<p class='text-danger'>User not found!</p>";
                }
                ?>

            </div>
        </div>
    </div>
</main>

<?php include('partials/footer.php'); ?>


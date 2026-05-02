<?php
include 'data.php';

$keyword = strtolower($_GET['keyword']);
$found = false;

echo "<h2 style='text-align:center;'>Results for: $keyword</h2>";

foreach ($jobs as $job) {
    if (
        stripos($job['title'], $keyword) !== false ||
        stripos($job['skills'], $keyword) !== false
    ) {
        $found = true;
        echo "<div class='job-card'>";
        echo "<h3>" . $job['title'] . "</h3>";
        echo "<p>Company: " . $job['company'] . "</p>";
        echo "<p><b>Skills:</b> " . $job['skills'] . "</p>";
        echo "</div>";
    }
}

if (!$found) {
    echo "<p style='text-align:center;color:red;'>No jobs found. Try another keyword.</p>";
}
?>
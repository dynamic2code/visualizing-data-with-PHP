<?php
// Fetch the JSON data
$json_url = 'https://www.thebrand.ai/i/prompt/seo-strategy?mode=categoryView';
$json_data = file_get_contents($json_url);
$data = json_decode($json_data, true);

// Loop through the JSON data and display
foreach ($data as $item) {
    $title = $item['title'];
    $description = $item['description'];
    $image_url = 'https://www.thebrand.ai/i/uploads/blog/202307/img_64afce13320925-40899747-89813831.jpg';

    echo "<h2>$title</h2>";
    echo "<p>$description</p>";
    echo "<img src='$image_url' alt='Image'>";
}
?>

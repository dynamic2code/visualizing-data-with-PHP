<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Fetch the JSON data
    $json_url = 'https://www.thebrand.ai/i/prompt/seo-strategy?mode=categoryView';
    $json_data = file_get_contents($json_url);
    $data = json_decode($json_data, true);

    // Loop through the posts and create div elements for each
    foreach ($data['posts'] as $post) {
        $title = $post['title'];
        $description = $post['description'];
        $created_at = $post['created_at'];
        $category_name = $post['category_name'];
        $id = $post['id'];
        $category_id = $post['category_id'];
        $image_url = $post['image_default'];
        $image_small = $post['image_small'];
        $link = $post['slug'];
        
        
        echo "<a href ='$link'>";
        echo "<div class='holder'>";
        
        echo "<div class='image'>";
        if ($image_url != '') {
            echo "<img src='https://www.thebrand.ai/i/$image_url' alt='Image'>";
        } else {
            echo "<img src='keybr_com - Typing lessons.jpeg' alt='Image'>";
        }
        echo "</div>";

        echo "<div class='post'>";
        echo "<h4>$title</h4>";
        echo "<p>$description</p>";
        echo "</div>"; 
        
        echo "</div>";
        echo "</a>";
    }
    ?>

</body>
</html>





<?php
$feed_url = "https://www.wired.com/feed/tag/ai/latest/rss";

$rss = simplexml_load_file($feed_url);
if ($rss === false) {
    die("Error fetching RSS feed.");
}

echo '<div class="container"><br><br><h1 class="text-center mb-4">Latest AI News</h1>';
echo '<div class="row">';

foreach ($rss->channel->item as $item) {
    $title = $item->title;
    $link = $item->link;
    $pubDate = date("d M Y", strtotime($item->pubDate));
    $description = strip_tags($item->description);
    $short_desc = substr($description, 0, 80) . "..."; // Shorter description

    // Extract image from <media:thumbnail> or inside <description>
    $namespaces = $item->getNamespaces(true);
    $media = $item->children($namespaces['media']);
    $image = isset($media->thumbnail) ? (string)$media->thumbnail->attributes()->url : '';

    // Fallback: Extract first image from description
    if (!$image && preg_match('/<img.*?src=["\'](.*?)["\']/i', $item->description, $matches)) {
        $image = $matches[1];
    }

    echo '<div class="col-lg-3 col-md-6 col-sm-12 mb-3">'; // Reduced margin for compact design
    echo '<div class="card shadow-sm d-flex flex-column">';
    if ($image) {
        echo '<div class="image-container">';
        echo '<img src="' . $image . '" class="card-img-top" alt="News Image">';
        echo '</div>';
    }
    echo '<div class="card-body d-flex flex-column flex-grow-1 p-2">'; // Reduced padding
    echo '<h6 class="card-title mb-2"><a href="' . $link . '" target="_blank" class="text-decoration-none text-dark">' . $title . '</a></h6>';
    echo '<p class="text-muted small mb-1">' . $pubDate . '</p>';
    echo '<p class="card-text small">' . $short_desc . '</p>';
    echo '<a href="' . $link . '" class="btn btn-sm btn-primary mt-auto" target="_blank">Read More</a>'; // Smaller button
    echo '</div></div></div>';
}

echo '</div></div>';
?>

<?php
$feed_url = "https://www.aitrends.com/feed/";

$rss = simplexml_load_file($feed_url);
if ($rss === false) {
    die("Error fetching RSS feed.");
}

echo "<h2>AI Trends - Latest Articles</h2>";
echo "<div class='feed-container'>";

foreach ($rss->channel->item as $item) {
    $title = $item->title;
    $link = $item->link;
    $pubDate = date("d M Y", strtotime($item->pubDate));
    $description = strip_tags($item->description);
    $short_desc = substr($description, 0, 150) . "...";

    // Extract image from <media:content> or inside <description>
    $namespaces = $item->getNamespaces(true);
    $media = $item->children($namespaces['media']);
    $image = isset($media->content) ? (string)$media->content->attributes()->url : '';

    // Fallback: Extract first image from description
    if (!$image && preg_match('/<img.*?src=["\'](.*?)["\']/i', $item->description, $matches)) {
        $image = $matches[1];
    }

    echo "<div class='feed-item'>";
    if ($image) {
        echo "<img src='$image' alt='News Image' class='feed-img'>";
    }
    echo "<div class='feed-content'>";
    echo "<h3><a href='$link' target='_blank'>$title</a></h3>";
    echo "<p class='date'>$pubDate</p>";
    echo "<p>$short_desc</p>";
    echo "</div>";
    echo "</div>";
}

echo "</div>";
?>

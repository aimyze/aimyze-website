<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Trends RSS Feed</title>

</head>
<body>
    <h1>Latest AI News</h1>
    <div id="rss-feed">Loading...</div>

    <script>
        fetch('rss.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('rss-feed').innerHTML = data;
            })
            .catch(error => console.error("Error loading RSS feed:", error));
    </script>
</body>
</html>

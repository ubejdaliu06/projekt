<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search Site</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="container">
        <h1>Search Site</h1>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Enter your search">
            <button onclick="performSearch()">Search</button>
        </div>
        <div id="searchResults">
           
        </div>
    </div>

    <script src="search.js"></script>
</body>
</html>

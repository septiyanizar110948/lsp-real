<!DOCTYPE html>
<html lang="en">
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        text-align: center;
    }

    .search-container {
        display: inline-block;
        border: 2px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .search-container input {
        padding: 10px;
        border: none;
        outline: none;
        width: 200px;
    }

    .search-container button {
        padding: 10px 15px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>cari sertifikat</title>
</head>

<body>
    <div class="container">
        <div><h1>dapatkan sertifikatmu di sini </h1></div>
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button type="button">Search</button>
        </div>
    </div>
</body>

</html>

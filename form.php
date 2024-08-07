<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Welcome to the Imaginary Art Gallery: Where Creativity Blooms!">
    <meta name="author" content="Arleen Kaur | Sukhwinder Kaur | Hardeep Singh">
    <link rel="icon" type="image/x-icon" href="images/main-icon.webp">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>Art Gallery Submission Form</title>
</head>
<body>
<header>
        <?php include("includes/header.php"); ?>
    </header>
    <!-- HTML -->
<div class="form-container">
    <form action="your-action-url" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <button type="submit">Submit</button>
    </form>
</div>

<?php include("includes/footer.php") ?>


</body>
</html>

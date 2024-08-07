<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the Imaginary Art Gallery: Where Creativity Blooms!">
    <meta name="author" content="Arleen Kaur | Sukhwinder Kaur | Hardeep Singh">
    <link rel="icon" type="image/x-icon" href="images/main-icon.webp">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>Art Gallery - Exhibitions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
      <?php include("includes/header.php") ?>
    </header>

    <main>
        <div class="exhibition-container">
            <h2>Current Exhibitions</h2>
            <section class="exhibitions">
                <div class="exhibition-item">
                    <img src="images/exhibition-page/exhibition1.jpg" alt="Exhibition 1">
                    <div class="exhibition-info">
                        <h2>“Echoes of Time: A Journey Through History”
                        </h2>
                        <p>This exhibition could showcase artifacts, documents, and multimedia presentations that highlight significant events and eras from ancient to modern times.
                        </p>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/exhibition-page/exhibition2.jpg" alt="Exhibition 2">
                    <div class="exhibition-info">
                        <h2>“Nature’s Palette: The Art of the Natural World”
                        </h2>
                        <p> Focus on the beauty and diversity of nature through paintings, photographs, and sculptures that depict landscapes, wildlife, and natural phenomena.</p>
                    </div>
                </div>
                <div class="exhibition-item ">
                    <img src="images/exhibition-page/exhibition3.jpg" alt="Exhibition 2">
                    <div class="exhibition-info">
                        <h2>“Innovations Unveiled: The Future of Technology”
                        </h2>
                        <p>Display cutting-edge technological advancements and prototypes, including interactive exhibits that allow visitors to experience the future of tech.</p>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/exhibition-page/exhibition4.jpg" alt="Exhibition 2">
                    <div class="exhibition-info">
                        <h2>“Cultural Mosaic: Celebrating Diversity”
                        </h2>
                        <p>Highlight the rich cultural heritage of different communities through traditional clothing, music, dance, and culinary arts.</p>
                    </div>
                </div>
                <div class="exhibition-item ">
                    <img src="images/exhibition-page/exhibition5.jpg" alt="Exhibition 2">
                    <div class="exhibition-info">
                        <h2>“Art in Motion: The Evolution of Dance”
                        </h2>
                        <p>Explore the history and development of dance across various cultures and time periods, featuring live performances, costumes, and video installations.</p>
                    </div>
                </div>
                <div class="exhibition-item reverse">
                    <img src="images/exhibition-page/exhibition6.jpg" alt="Exhibition 2">
                    <div class="exhibition-info">
                        <h2>“Sustainable Living: Innovations for a Greener Future”
                        </h2>
                        <p>Showcase eco-friendly products, sustainable practices, and green technologies that promote environmental conservation and sustainable living.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include("includes/footer.php") ?>

   
</body>
</html>

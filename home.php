<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors Home</title>
    <link rel="stylesheet" href="/phpmotors/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background-img">
    <div class="body-container">
    <!-- Header -->
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/snippets/header.php';
    ?>

    <!-- Navigation -->
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/snippets/navigation.php';
    ?>
    <!-- Main -->
     <main class="main-container">
        <div class="main-header">
            <h1 class="main-greeting">
                Welcome to PHP Motors!
            </h1>
        </div>
        <div class="product-container">
            <div class="product-img">
                <img src="/phpmotors/images/delorean.jpg" alt="DMC Delorean">
                <div class="own-today">
                    <img src="../phpmotors/images/site/own_today.png" alt="Own Today" srcset="">
                </div>
                <section class="product-specs">
                    <h1 class="product-specs-header">DMC Delorean</h1>
                    <ul class="produce-specs-list">
                        <li class="spec">3 Cup holders</li>
                        <li class="spec">Superman doors</li>
                        <li class="spec">Fuzzy dice!</li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="reviews-and-upgrades">
            <section class="product-reviews">
                <h2 class="review-section-header">
                    DMC Delorean Reviews
                </h2>
                <ul class="review-points">
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly!" (5/5)</li>
                    <li>"The most futuristic ride of our day" (4.5/5)</li>
                    <li>"80's livin and I love it!" (5/5)</li>
                </ul>
            </section>
            <section class="product-upgrades">
                <h2 class="review-section-header">
                    Delorean Upgrades
                </h2>
                <div class="upgrades-container">
                    <div class="upgrade-box">
                        <div class="upgrade">
                            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumber sticker upgrades">
                        </div>
                        <a href="#">Bumper Sticker</a>
                    </div>
                    <div class="upgrade-box">
                        <div class="upgrade">
                            <img src="/phpmotors/images/upgrades/flame.jpg" alt="flame upgrades">
                        </div>
                        <a href="#">Flame Decals</a>
                    </div>
                    <div class="upgrade-box">
                        <div class="upgrade">
                            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="flux-cap upgrades">
                        </div>
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="upgrade-box">
                        <div class="upgrade">
                            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="hub-cap upgrades">
                        </div>
                        <a href="#">Hub Cap</a>
                    </div>
                </div>
            </section>
        </div>
     </main>

     <!-- Footer -->
     <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/snippets/footer.php';
     ?>
    </div>
    </div>
</body>
</html>

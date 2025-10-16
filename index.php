<?php

echo <<<HTML
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bay Estates</title>
<link rel="stylesheet" href="styles.css">
<body>
    <section class="top">
        <div class="company"><a href="index.php">Bay Estates</a></div>
        <ul class="top-nav">
            <li><a href="" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="properties.php">Properties</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="/secure/index.php">Admin</a></li>
            <li class="right"><a>Find A House</a></li>
        </ul>
    </section>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Find A House That Suits You</h1>
                <p>Want to find a home? We are ready to help you find one that fits your lifestyle and needs.</p>
                <a class="btn">Get Started</a>
                <div class="stats">
                    <div class="stat">
                        <div class="number">500+</div>
                        <div class="label">Listed Properties</div>
                    </div>
                    <div class="stat">
                        <div class="number">2000+</div>
                        <div class="label">Happy Customers</div>
                    </div>
                    <div class="stat">
                        <div class="number">50+</div>
                        <div class="label">Awards</div>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <img src="./home.jpg" alt="Beautiful house">
            </div>
        </section>
    </main>

    <section class="founder">
        <div>
            <div class="name">Alex Holland</div>
            <div class="role">Founder</div>
        </div>
        <div>
            <p>At Monterey Properties, we believe that a home is more than just walls and a roof—it's where dreams take
                root and memories grow. Every property we handle is chosen with care, and every client is guided with
                integrity and dedication. Our mission is to make the journey of finding, buying, or selling a home as
                seamless and inspiring as the life you envision within it. We don't just build transactions; we build
                lasting relationships and a community where everyone can thrive.</p>
        </div>
    </section>
</body>

</html>
HTML;

?>
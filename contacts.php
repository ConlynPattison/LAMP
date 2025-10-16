<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts | Bay Estates</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Top Navigation -->
    <section class="top">
        <div class="company"><a href="index.php">Bay Estates</a></div>
        <ul class="top-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="properties.php">Properties</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contacts.php" class="active">Contacts</a></li>
            <li><a href="/secure/index.php">Admin</a></li>
            <li class="right"><a>Find A House</a></li>
        </ul>
    </section>

    <!-- Main Content -->
    <main>
        <section class="properties">
            <h1>Our Agents</h1>
            <div class="property-grid">
                <?php
                $file = __DIR__ . "/contacts.txt";
                if (file_exists($file)) {
                    $lines = file($file);

                    foreach ($lines as $line) {
                        $parts = explode("|", $line);
                        if (count($parts) === 5) {
                            list($name, $email, $phone, $address, $image) = $parts;
                            ?>
                            <div class="property-card">
                                <img src="./<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($name) ?>">
                                <div class="price"><?= htmlspecialchars($name) ?></div>
                                <div class="details"><?= htmlspecialchars($email) ?></div>
                                <div class="details"><?= htmlspecialchars($phone) ?></div>
                                <a href="#"><?= htmlspecialchars($address) ?></a>
                            </div>
                            <?php
                        }
                    }
                } else {
                    echo "<p>No contacts found.</p>";
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
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
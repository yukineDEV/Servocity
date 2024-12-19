<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServoCity - Government Services Portal</title>
    <link rel="stylesheet" href="../assets/css/style-category.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="assets/css/style-homepage.css">
</head>

<body>
    <header>
        <!-- Top Navbar -->
        <nav class="navbar">
            <div class="logo">
                <img src="../assets/image/servocity 1.png" alt="ServoCity Logo">
            </div>
            <div class="nav-links">
                <a href="homepage.php" class="active">Home</a>
                <a href="homepage.php #about">About</a>
                <a href="category.php">Category</a>
                <a href="#">Complaint</a>
                <a href="#">Feedback</a>
            </div>
            <div class="search-container">
                <input class="text" type="text" placeholder="Search">
            </div>
            <a href="login.php" class="signup-btn">Sign In</a>
        </nav>
    </header>


    <main>
        <div class="top-text">
            <h1>Explore by Category</h1>
        </div>
        <div class="mother-container">
            <!-- Aside Navbar -->
            <div class="main-container">
                <aside class="sidebar">
                    <ul class="category-list">
                        <li class="active"><a href="#health">Health</a></li>
                        <li><a href="#transportation">Transportation</a></li>
                        <li><a href="#government">Government</a></li>
                        <li><a href="#smart-city">Smart City Solution</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#tourism">Tourism</a></li>
                        <li><a href="#all" class="all-categories">All Categories</a></li>
                    </ul>
                    <div class="sidebar-footer">
                        <span class="plus-icon">+</span>
                        <span class="minus-icon">-</span>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="content">
                <div class="hero">
                    <img src="../assets/image/kasurrs.png" alt="Modern Hospital Room">
                </div>

                <div class="description">
                    <h1>HEALTH</h1>
                    <p>Jumlah warga lansia di yogyakarta diperkirakan akan terus meningkat, seiring dengan tren demografi dan angka kelahiran yang cenderung rendah. Hal ini menjadikan kebutuhan layanan kesehatan sebagai prioritas utama bagi kota. Sebagai bagian dari inisiatif menuju kota pintar, yogyakarta terus mengeksplorasi teknologi untuk menciptakan solusi kesehatan yang proaktif dalam memenuhi kebutuhan masyarakat.</p>
                    <p>Saat ini inisiatif kesehatan di yogyakarta terfokus pada penyediaan informasi dan alat yang membantu warga dalam menjaga kesehatan mereka secara mandiri agar lebih siap menghadapi kebutuhan masa depan.</p>
                </div>

                <section class="initiatives">
                    <h2>BEBERAPA INISIATIF KESEHATAN DIGITAL DI YOGYAKARTA:</h2>

                    <div class="initiative-grid">
                        <?php
                        $initiatives = [
                            [
                                'image' => 'hospital-1.jpg',
                                'title' => 'Rumah Sakit Perkotaan',
                                'description' => 'Aplikasi & Sistem Informasi RS PKU Muhammadiyah untuk Pelayanan Kesehatan di Universitas Yogyakarta'
                            ],
                            [
                                'image' => 'hospital-2.jpg',
                                'title' => 'Rumah Sakit Internasional',
                                'description' => 'Aplikasi & Sistem Informasi Layanan Unggulan untuk Pelayanan Kesehatan di Universitas Yogyakarta'
                            ],
                            [
                                'image' => 'hospital-3.jpg',
                                'title' => 'RSUP Dr Sardjito',
                                'description' => 'Aplikasi & Sistem Informasi RS Dr. Sardjito untuk Pelayanan Kesehatan di Universitas Yogyakarta'
                            ],
                            [
                                'image' => 'hospital-4.jpg',
                                'title' => 'RS Bethesda',
                                'description' => 'Aplikasi & Sistem Informasi RS Bethesda untuk Pelayanan Kesehatan di Universitas Yogyakarta'
                            ]
                        ];

                        foreach ($initiatives as $initiative) {
                            echo '<div class="initiative-card">';
                            echo '<img src="assets/image/' . $initiative['image'] . '" alt="' . $initiative['title'] . '">';
                            echo '<div class="card-content">';
                            echo '<h3>' . $initiative['title'] . '</h3>';
                            echo '<p>' . $initiative['description'] . '</p>';
                            echo '<a href="#" class="kunjungi-link">Kunjungi Link</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-branding">
                    <h3>ServoCity</h3>
                    <p class="tagline">Scan. Detect. Remove.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><img src="../assets/image/twitter.png" alt="Twitter"></a>
                        <a href="#" class="social-link"><img src="../assets/image/facebook.png" alt="Facebook"></a>
                        <a href="#" class="social-link"><img src="../assets/image/youtube.png" alt="YouTube"></a>
                    </div>
                </div>

                <nav class="footer-nav">
                    <ul>
                        <li><a href="#" class="highlight">About ServoCity</a></li>
                        <li><a href="#" class="highlight">Android</a></li>
                        <li><a href="#" class="highlight">Help</a></li>
                        <li><a href="#" class="highlight">About</a></li>
                        <li><a href="#" class="highlight">Insights</a></li>
                    </ul>
                </nav>

                <div class="footer-legal">
                    <div class="legal-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </div>
                    <p class="copyright">Copyright © 2024 ServoCity | E-Government Website. Last Updated 21 Oct 2024. Registered in Universitas Islam Indonesia No. 8</p>
                    <p class="credits">Designed & Developed by ServoCity Team</p>
                    <p class="trademark">Apple, the Apple logo, and iPhone are trademarks of Apple Inc., registered in the U.S. and other countries. App Store is a service mark of Apple Inc. Android, Google Play and the Google Play logo are trademarks of Google LLC.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="../assets/javascript/category.js"></script>
</body>

</html>
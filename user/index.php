<?php
include '../functions.php';

$query = query("SELECT * FROM produk");

// if ($_SESSION['level'] != 'user') {
//     header('location:../login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Motorcycles</title>
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,700&family=Viga&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Rooms<span>Motorcycle<span></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">produk</a>
            <a href="#contact">Kontak</a>
            <a href="../logout.php">Logout</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- search form start -->
        <div class="search-form">

            <input type="search" id="search-box" placeholder="search here..." name="keyword">
            <label for="search-box"><i data-feather="search"></i></label>


        </div>
        <!-- search form end -->

        <!-- Shopping Cart start -->
        <div class="shopping-cart">
            <div class="cart-item">
                <img src="../image/produk/1.jpg" alt="product 1">
                <div class="item-detail">
                    <h3>Produk 1</h3>
                    <div class="item-price">IDR 8000K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
            <div class="cart-item">
                <img src="../image/produk/1.jpg" alt="product 1">
                <div class="item-detail">
                    <h3>Produk 1</h3>
                    <div class="item-price">IDR 8000K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
            <div class="cart-item">
                <img src="../image/produk/1.jpg" alt="product 1">
                <div class="item-detail">
                    <h3>Produk 1</h3>
                    <div class="item-price">IDR 8000K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
        </div>

        <!-- Shopping Cart end -->
    </nav>
    <!-- navbar end -->

    <!-- hero section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Kualitas Memukau Harga <span>Terjangkau</span></h1>
            <p>.</p>
            <a href="whatsapp://send?text=Tanyo cek rang kadai, ambo kabalanjo...&phone=+6282283795284" class="cta">Beli
                Sekarang</a>
        </main>
    </section>
    <!-- hero section end -->

    <!-- about section start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="../image/ducatii.jpeg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa Memilih Berbelanja Di Kami</h3>
                <p>Kami menawarkan berbagai jenis Motor, termasuk varian yang sulit ditemukan di
                    tempat lain, sehingga anda dapat memilih produk yang sesuai dengan selera dan kebutuhan anda.
                </p>

            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- menu section start -->
    <section id="menu" class="menu">
        <h2><span>Produk</span>Terlaris Kami</h2>
        <p>Toko kami menawarkan berbagai macam produk berkualitas tinggi, termasuk Motor Rare.</p>
        <div class="row">
            <div class="menu-card">
                <img src="../image/ben.jpg" alt="harley-davidson.webp" class="menu-card-img">
                <h3 class="menu-card-title">-Harley-Davidson</h3>
                <div class="menu-card-price">Rp 15000</div>
            </div>
            <div class="menu-card">
                <img src="../image/ben.jpg" alt="harley" class="menu-card-img">
                <h3 class="menu-card-title">-Harley-Davidson</h3>
                <div class="menu-card-price">Rp 15000</div>
            </div>
            <div class="menu-card">
                <img src="../image/ben.jpg" alt="Harley" class="menu-card-img">
                <h3 class="menu-card-title">-Harley-Davidson</h3>
                <div class="menu-card-price">Rp 15000</div>
            </div>
            <div class="menu-card">
                <img src="../image/Kawasaki300.jpg" alt="harley-davidson" class="menu-card-img">
                <h3 class="menu-card-title">-Kawasaki</h3>
                <div class="menu-card-price">Rp 15000</div>
            </div>
            <div class="menu-card">
                <img src="../image/Kawasaki300.jpg" alt="harley-davidson" class="menu-card-img">
                <h3 class="menu-card-title">Kawasaki</h3>
                <div class="menu-card-price">Rp 15000</div>
            </div>
        </div>


        <!-- tambahkan lebih banyak menu-item di sini -->
        </div>

    </section>
    <!-- menu section end -->

    <!-- produk section start -->

    <section class="products" id="products">
        <h2><span>Produk Unggulan</span> Kami</h2>
        <p style="text-align: center;">Inilah sebagian dari produk motor yang kami tawarkan di toko kami semoga anda teertarikk untuk berbelanja di toko Kami</p>

        <div class="row">
            <?php foreach ($query as $produk) : ?>

                <div class="product-card">
                    <div class="product-icons">
                        <a href="#"><i data-feather="shopping-cart"></i></a>
                        <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                    </div>
                    <div class="product-image">
                        <img src="../image/<?= $produk['foto']; ?>" alt="produk 1">
                    </div>
                    <div class="products-content">
                        <h3><?= $produk['nama_produk'] ?></h3>
                        <div class="product-stars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <div class="product-price">
                            <?= $produk['harga']; ?> <span><?= $produk['harga_normal']; ?></span>
                            <p>Stok: <?= $produk['stok']; ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- produk section end -->

    <!-- contact section start -->
    <section id="contact" class="contact">
        <h2><span>Kontak </span> Kami</h2>
        <p>Jangan ragu untuk menghubungi kami melalui nomor telepon atau email yang tersedia di halaman Kontak Kami,
            atau datang langsung ke showroom kami untuk memilih langsung produk-produk bagus yang kami tawarkan. Kami selalu
            berusaha untuk memberikan layanan terbaik untuk setiap pelanggan, dan kami berharap dapat melayani Anda
            dengan baik di rooms motorcycle kami.</p>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.324247029478!2d100.36078237510486!3d-0.9016982990895703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9e1b153b00f%3A0xb3e5b08fb6e0e8f1!2sTugu%20Simpang%20Tinju!5e0!3m2!1sid!2sid!4v1683990899716!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            <form action="" method="post">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" id="nama" name="nama" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" id="nohp" name="nohp" placeholder="No Hp">
                </div>
                <button type="submit" class="btn" value="kirim">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- contact section end -->

    <!-- chat wa start -->
    <a href="https://wa.me/+6282283795284?text=Halo,%20saya%20tertarik%20dengan%20produk%20Anda.%20Saya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20produk%20ini." target="_blank">
        <img src="../image/tombol-wa.png" alt="WhatsApp Logo" class="whatsapp-logo">
    </a>
    <!-- chat wa end -->

    <!-- footer start-->
    <footer>
        <div class="socials">
            <a href="https://instagram.com/beno_4865?igshid=ZGUzMzM3NWJiOQ==" target="_blank"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="https://www.facebook.com/beno.dwianto.39?mibextid=ZbWKwL" target="_blank"><i data-feather="facebook"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>created by <a href="">Beno Dwianto</a>. | &copy; 2023</p>
        </div>
    </footer>
    <!-- footer end-->

    <!-- Modal box item detail start -->
    <?php foreach ($query as $produk) : ?>
        <div class="modal" id="item-detail-modal">
            <div class="modal-container">
                <a href="#" class="close-icon"><i data-feather="x"></i></a>
                <div class="modal-content">
                    <img src="../image/<?= $produk['foto']; ?>" alt="produk 1">
                    <div class="product-content">
                        <h3>Product </h3>
                        <p>motor bagus anda tidak akan pernah menyesal telah membelinya yea gas</p>
                        <div class="products-content">
                            <h3><?= $produk['nama_produk']; ?></h3>
                            <div class="product-stars">
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                            </div>
                            <div class="product-price">
                                <?= $produk['harga']; ?> <span></span>
                            </div>
                            <a href="#"><i data-feather="shopping-cart"></i><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Modal box item detail end -->

    <!-- feather icon -->
    <script>
        feather.replace();
    </script>
    <!-- my javascript -->
    <script src="../js/script.js"></script>
</body>

</html>
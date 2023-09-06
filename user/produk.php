<?php
include '../functions.php';

$query = query("SELECT * FROM produk");

if (isset($_POST['cari'])) {
    $query = cari($_POST['keyword']);
}
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
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,700&family=Viga&display=swap"
        rel="stylesheet">
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

    <!-- produk section start -->

<section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p style="text-align: center;">Inilah sebagian dari produk motor yang kami tawarkan di toko kami semoga anda teertarikk untuk berbelanja di toko Kami</p>
    
    <div class="row">
        <?php foreach($query as $produk) : ?>

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
                <?= $produk['harga']; ?> <span><?= $produk ['harga_normal'] ;?></span>
                <p>Stok: <?= $produk['stok']; ?></p>
               </div>
            </div>

        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- produk section end -->


    <!-- chat wa start -->
    <a href="https://wa.me/+6282283795284?text=Halo,%20saya%20tertarik%20dengan%20produk%20Anda.%20Saya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20produk%20ini."
        target="_blank">
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
                             IDR 80000k <span></span>
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
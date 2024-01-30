<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Cat</title>

    <!-- icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css --> 
    <link rel="stylesheet" href="css/main.css">
    <!-- icon title -->
    <link rel="icon" href="images/paw.png">

</head>
<body>
    


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="header.php">
                <img src="images/paw.png" alt="site icon">
            </a>

            <div class="order-lg-2 nav-btns">
                <!--
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                </button>
                -->
                <button type="button" class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#header">home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#collection">kitten</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="#testi">testi</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="#about">about us</a>
                    </li>
                </ul>
            </div>

            
        </div>
    </nav>
    <!-- end navbar -->

    <!-- header -->

    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="container h-100 d-flex align-items-center justify-content-center carousel-inner">
            <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-white">Best Adoption Place</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">new arrivals</h1>
                <a href="#collection" class="btn mt-3 text-uppercase">Adopt now</a>
            </div>
            <div class="text-center carousel-item">
                <h2 class="text-capitalize text-white">Pilihlah kucing sesuai hatimu</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white"></h1>
                <a href="#collection" class="btn mt-3 text-uppercase">Adopt now</a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end of header-->

    <!-- collection -->

    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">Paw Paw Cat Adoption</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">Semua Ras</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".rag">Ragdoll</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".munc">Munchkin</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".sphy">Sphynx</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".brit">British Short Hair</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".sia">Persia</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".exo">Exotic Peaknose</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".siam">Siamese</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".bali">Balinese</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".flat">Persia Flatnose</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".scott">Scottish Fold</button>
                </div>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    <!-- 1 -->
                    <?php 
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM kucing where status = 'Belum teradopsi'");
                    while($data=mysqli_fetch_array($query)){ ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 brit exo bali flat">
                        <div class="collection-img position-relative overflow-hidden">
                            <img src="img/<?=$data["foto"]?>" class="w-100">
                            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                                <i class="fas fa-heart"></i>
                            </span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1"> <?=$data["nama"]?> <?=$data["ras"]?> <?=$data["usia"]?> <br> <?=$data["gender"] ?> </p>
                            <a href="coba.php?id=<?=$data['id_kucing']?>" class="btn btn-primary mt-3">Adopt</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- and of collection -->

    <!-- testimoni -->
    <section id="testi" class="py-1">
        <div class="container">
            <div class="title text-center py-5 ">
                <h2 class="position-relative d-inline-block">Testimoni</h2>
            </div>
            <!-- 1 -->
            <!--<div class="col-md-6 col-lg-4 col-xl-3 p-2 brit exo bali flat">
                        <div class=" position-relative overflow-hidden">
                            <img src="images/testi1.jpeg" class="w-100">
                        </div>
                        <div class=" position-relative overflow-hidden">
                            <img src="images/testi2.jpeg" class="w-100">
                        </div>
            </div> -->            
            <div class="testi row g-3 my-2">
                <div class="card border-0 col-md-4 col-lg-2 bg-transparent">
                    <img src="images/testi1.jpeg" alt="" class="w-100px">
                </div>
                <div class="card border-0 col-md-4 col-lg-2 bg-transparent">
                    <img src="images/testi2.jpeg" alt="" class="w-100">
                </div>
                <div class="card border-0 col-md-4 col-lg-2 bg-transparent">
                    <img src="images/testi3.jpeg" alt="" class="w-100">
                </div>

                <div class="card border-0 col-md-4 col-lg-2 bg-transparent">
                    <img src="images/testi5.jpeg" alt="" class="w-100">
                </div>
                <div class="card border-0 col-md-4 col-lg-2 bg-transparent">
                    <img src="images/testi6.jpeg" alt="" class="w-100">
                </div>
                <div class="card border-0 col-md-4 col-lg-2 bg-transparent">
                    <img src="images/testi7.jpeg" alt="" class="w-100">
                </div>
            </div>     
            
           
        </div>
    </section>
    <!-- end of testimoni -->

    <!-- about us -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-5 text-center">
                        <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <h5>Paw paw adopt</h5>
                    <p class=" text-muted"> merupakan platform digital bagi pecinta hewan peliharaan (kucing) untuk mendapatkan segala kebutuhan produk tanpa memungut biaya, pelayanan tanggap, kualitas terbaik dan terlengkap di Indonesia. 
                    Siapapun dapat mengadopsi di platform kami, namun sangat diharapkan adanya tanggung jawab penuh atas hewan yang sudah menjadi hak milik.</p>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <img src="images/logo.jpeg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->


    <!-- footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a class="text-uppercase text-decoration-none brand text-white" href="header.php" style="font-size: large;">Paw Paw Adopt</a>
                    <p class="text-white mt-3">Adopsi Kucing di platform kami merupakan layanan adopsi kucing terbaik.
                    Mempunyai pengalaman sejak tahun 2020 dan menjadi tempat adopsi kucing paling terekomendasi.</p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="#collection" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-1"></i>Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-1"></i>Kitten
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#testi" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-1"></i>Testi
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#about" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-1"></i>About Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Contact Us</h5>
                    <div class="d-flex justify-content-start align-items-start my-2">
                        <span class="me-3">
                            <i class="fas fa-map-marked alt"></i>
                        </span>
                        <span class="fw-light">
                            Jl. Perjuangan, Sunyaragi, Kec. Kesambi, Kota Cirebon, Jawa Barat 45132
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">
                            pawpaw.adopt@gmail.com
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2">
                        <span class="me-3">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="fw-light">
                            +6285 157 844 
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="#" class="text-white text-decoration-none fs-4 me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none fs-4 me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none fs-4 me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none fs-4 me-4">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div class="footer-bottom">
            <div class="copyright">
                Copyrights 2020 PAW PAW  •  All Rights Reserved.
            </div>
        </div>
        -->
    </footer>

    <!-- end of footer -->
 


    <!-- jquery -->
    <script src="js/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js --> 
    <script src="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
    
</body>
</html>
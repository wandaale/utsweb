<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket | TIX ID</title>
    <script src="https://kit.fontawesome.com/6ce21f9da1.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <style>
    <?php include('css/about.css');
    ?>
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="tixid">TIX ID</div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tiket.php">Ticket</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="logout_user.php">Sign Out</a></li>
                </ul>
            </nav>
            <div class="menu-bar">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1> ABOUT TIX ID </h1>
                </div>
                <div class="content">
                    <h3> TIX ID adalah website layanan hiburan terdepan di Indonesia yang memberikan pengalaman baru
                        dalam pembelian tiket film dan hiburan lainnya. Dengan TIX ID, pengguna dapat mengetahui
                        informasi tentang film terkini serta melakukan pemesanan tiket bioskop dengan mudah, cepat, dan
                        aman. </h3>
                    <h1>ABOUT US</h1>
                    <div class="content">
                        <h3> Saya adalah seorang mahasiswa semester 3 di Prodi Informatika Universitas Mulawarman. 
                            Website ini saya buat untuk memenuhi Ujian Akhir Semester saya.
                        </h3>
                        <div class="button">
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href="instagram.com/wandaale_"><i class="fab fa-github"></i></a>


                    </div>
                </div>
                <div class="image-section">
                    <img src="">
                </div>
            </div>
        </div>

        <script>
        $(document).ready(function() {
            $(".menu-bar").click(function() {
                $('nav').toggleClass('active');
            })
        })
        </script>


        <footer>
            <section class="footer">
                <div class="inside-footer">
                    <div class="copyright">
                        <p>copyright &copy <span>TIX ID</span></p>
                    </div>
                </div>
            </section>
        </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    // session_destroy();
    // header('proses_login.php');
    // $_SESSION['username'] = "riannscarlezt";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Filmbajakan.com
    </title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="gambar/icons-dessert.ico">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="" class="logo" id="warna">
                Film<span>Bajakan.com</span>
            </a>
            <div class="search-box">
                <input type="search" name="search" id="search-input" placeholder="Cari film">
                <i
                href="" class="bx bx-search" id="cari"></i>
                    <!-- <a href="" class="bx bx-search"></a> -->
                </i>
            </div>
            <a href="#about-me" class="user">
                <img src="gambar/logo-dessertskuy.jpg" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="#beranda" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Beranda</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class="bx bxs-hot"></i>
                    <span class="nav-link-title">Populer</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class="bx bx-film"></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#series" class="nav-link">
                    <i class="bx bx-tv"></i>
                    <span class="nav-link-title">Series</span>
                </a>
                <a href="#about-me" class="nav-link">
                    <i class="bx bx-user"></i>
                    <span class="nav-link-title">About Me</span>
                </a>
                
                    <?php if (!isset($_SESSION["username"])){
                        echo(
                            '<a href="proses_login.php" class= "nav-link" id= "login">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Login</span>');
                    } else {
                        echo(
                            '<a href="proses_keluar.php" class= "nav-link" id= "lgout">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Logout</span>');
                    }?>
                    
                </a>
                <label>
                    <input type="checkbox" class="checkbox" id="tombol">
                    <span class="check"></span>
                </label>
            </div>
        </div>
    </header>
    <!--Section Beranda-->
    <section class="beranda container" id="beranda">
        <img src="gambar/thor.jpeg" alt="" class="beranda-img" id="gambar1">
        <div class="beranda-teks">
            <h1 class="judul-beranda">Thor: Love and Thunder (2022)</h1>
            <p>Action, Adventure, Fantasy</p>
            <a href="#" class="tombol-ntn">
                <i class="bx bx-caret-right-circle"></i>
                <span>Putar Film</span>
            </a>
        </div>
    </section>

    <!--Section popular-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Film Populer</h2>

        </div>
        <div class="list-populer" >
            <div>
                <div>
                    <div>
                        <img src="gambar/doctor-strange.jpg" alt="" class="film-box">
                        <div class="box-text">
                            <h2 class="judul-film">Doctor Strange in the Multiverse of Madness</h2>
                            <span class="genre-film">Action, Adventure, Fantasy</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class="bx bx-caret-right-circle"></i>
                                <span>Putar Film</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="gambar/pinnochio.jpg" alt="" class="film-box">
                        <div class="box-text">
                            <h2 class="judul-film">Pinocchio (2022)</h2>
                            <span class="genre-film">Adventure, Comedy, Drama</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class="bx bx-caret-right-circle"></i>
                                <span>Putar Film</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="#movies" >Lainnya</a>
        </div>
    </section>

    <!--Section Movies-->
    <section class="populer container" id="movies">
        <div class="head">
            <h2 class="judul-populer">Movies</h2>

        </div>
        <div class="list-populer" >
            <div>
                <div>
                    <div>
                        <img src="gambar/beast.jpeg" alt="" class="film-box">
                        <div class="box-text">
                            <h2 class="judul-film">Beast (2022)</h2>
                            <span class="genre-film">Drama, Adventure, Horror</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class="bx bx-caret-right-circle"></i>
                                <span>Putar Film</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="gambar/minions.jpg" alt="" class="film-box">
                        <div class="box-text">
                            <h2 class="judul-film">Minions: Rise of Gru (2022)</h2>
                            <span class="genre-film">Action, Drama</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class="bx bx-caret-right-circle"></i>
                                <span>Putar Film</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="#series">Lainnya</a>
        </div>
    </section>

    <!--Section Series-->
    <section class="Series container" id="series">
        <div class="head">
            <h2 class="judul-populer">Series</h2>

        </div>
        <div class="list-populer" >
            <div>
                <div>
                    <div>
                        <img src="gambar/lord-rings.jpg" alt="" class="film-box">
                        <div class="box-text">
                            <h2 class="judul-film">Lord of the Rings: The Rings of Power (Ep. 5)</h2>
                            <span class="genre-film">Action, Adventure, Drama</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class="bx bx-caret-right-circle"></i>
                                <span>Putar Film</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="gambar/money-heist.jpg" alt="" class="film-box">
                        <div class="box-text">
                            <h2 class="judul-film">Money Heist Season 5 (Ep. 3)</h2>
                            <span class="genre-film">Heist, Drama, Crime</span>
                            <a href="#" class="tombol-ntn">
                                <br><i class="bx bx-caret-right-circle"></i>
                                <span>Putar Film</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <footer id="about-me">
        <div class="footer container">
            <h1 align="center">About Me</h1><br>
            <div class="img"></div>
            <div class="text">Rian Syaputra<span> Ainun Naim</span></div</div>
        <p class="desc"> Hallo!, nama saya Rian. Saya adalah pengembang website ini, silahkan dukung website ini dengan cara menon-aktifkan AdBlock browser kalian. Enjoy the movie!.</p>
        </div>
        <div class="sosmed-footer" align="center">
            <div><a target="blank" href="https://www.instagram.com/riannscarlezt/" class="nav-link">
                <i class="bx bxl-instagram" ></i>
                <span class="sosmed-range">Instagram  </span>
            </a>
            </div>
            <div><a target="blank" href="https://wa.wizard.id/913782" class="nav-link">
                <i class="bx bxl-whatsapp"></i>
                <span class="sosmed-range">  WhatsApp</span>
                <a/>
            </div>
        </div>
    </footer>
    <script src="javascript.js"></script>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("white-mode");
        }

    </script>


    </body>
</html>
<?php

    require_once "login-form/core/init.php";

    // if (!isset($_SESSION['user']) ){
    //     $_SESSION['msg'] = 'anda belum login';
    //     header('Location: login.php');
    // }



    
    // if(isset($_SESSION['pesan'])) flash_delete2($_SESSION['pesan']);


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Project-Training 1</title>
</head>

<body>

    <section class="header">
        <nav>
            <a href="#"><img src="Assets/logo-1.png" alt=""></a>

            <div class="btn">

                <a href="#" id="download"> <img src="Assets/download.png" alt="download-image"> </a>

                <button id="login-btn">

                    <span>Log in </span>
                    <span> <i class="fa-duotone fas fa-user-circle"></i></span>

                </button>

            </div>

            <div class="navbar">
                <ul>

                    <li><a href="#">HOME</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">CHARACTERS</a></li>
                    <li class="dropdown">
                        <a href="#">EXPLORE <i class="fa-solid fas fa-caret-down"></i></a>
                        <div class="menu-explore">
                            <a href="#">ABOUT GAME</a>
                            <a href="#">SINGULARITY</a>
                            <a href="#">EPIC OF REMNANTS</a>
                            <a href="#">LOSTBELTS</a>
                        </div>
                    </li>

                    <li class="dropdown-2">
                        <a href="#">More <span><i class="fa-solid fas fa-caret-down"></i></span></a>
                        <div class="menu-more">
                            <a href="">TYPE-MOON</a>
                            <a href="">TOP-UP</a>
                            <a href="">CAMPAIGN</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>


        <div class="poster">
            <h1>Released On Multiple Platforms - Download Now!</h1>
            <ul class="poster-download">
                <li> <a href="#"> <img src="Assets/playstation.png" alt=""> </a></li>
                <li> <a href="#"> <img src="Assets/application.png" alt=""> </a></li>
                <li> <a href="#"> <img src="Assets/google.png" alt=""> </a></li>
                <li> <a href="#"> <img src="Assets/windows.png" alt=""> </a></li>
            </ul>



        </div>



    </section>





    <section class="news">
        <h1>NEWS</h1>

        <div id="karya_box">


            <div class="swiper mySwiper">
                <div class="container swiper-wrapper">

                    <div id="karya_box_kr" class="swiper-slide">
                        <img src="Assets/background-1.png" alt="" id="target_gambar">
                    </div>

                    <div id="karya_box_kr" class="swiper-slide">
                        <img src="Assets/banner2.jpg" alt="" id="target_gambar">
                    </div>

                    <div id="karya_box_kr" class="swiper-slide">
                        <img src="Assets/banner.jpg" alt="" id="target_gambar">
                    </div>

                    <div id="karya_box_kr" class="swiper-slide">
                        <img src="Assets/news-background.jpg" alt="">
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

            <div class="news-content">
                <ul class="news-tab">
                    <li data-cate="10" class="news__tab__item news__tab__item--active">
                        Latest
                    </li>
                </ul>

                <ul class="news-list">

                    <li> <a href="#" class="news-item">
                            <p class="news-title">LOREM IPSUM KSAJDLKASHJDJ:LSAHD>ASJDLIKJSLDKHASNDLJH</p>
                            <p class="news-date">Mar 4, 2022</p>
                        </a></li>
                    <li> <a href="#" class="news-item">
                            <p class="news-title">LOREM IPSUM KSAJDLKASHJDJ:LSAHD>ASJDLIKJSLDKHASNDLJH</p>
                            <p class="news-date">Mar 4, 2022</p>
                        </a></li>
                    <li> <a href="#" class="news-item">
                            <p class="news-title">LOREM IPSUM KSAJDLKASHJDJ:LSAHD>ASJDLIKJSLDKHASNDLJH</p>
                            <p class="news-date">Mar 4, 2022</p>
                        </a></li>
                    <li> <a href="#" class="news-item">
                            <p class="news-title">LOREM IPSUM KSAJDLKASHJDJ:LSAHD>ASJDLIKJSLDKHASNDLJH</p>
                            <p class="news-date">Mar 4, 2022</p>
                        </a></li>
                    <li> <a href="#" class="news-item">
                            <p class="news-title">LOREM IPSUM KSAJDLKASHJDJ:LSAHD>ASJDLIKJSLDKHASNDLJH</p>
                            <p class="news-date">Mar 4, 2022</p>
                        </a></li>




                </ul>

            </div>



        </div>





    </section>



    <section class="lostbelt">


        <div class="row">
            <div class="lostbelt-col">
                <img id="map" src="Assets/Lostbelt 1.png" alt="">
                <div class="layer">
                    <img src="Assets/Anastasia.png" alt="">
                </div>
            </div>

            <div class="lostbelt-col">
                <img id="map" src="Assets/lostbelt2.jpg" alt="">
                <div class="layer">
                    <img src="Assets/Skadi.png" alt="">
                </div>
            </div>

            <div class="lostbelt-col">
                <img id="map" src="Assets/Lostbelt3.png" alt="">
                <div class="layer">
                    <img src="Assets/YU-removebg-preview.png" alt="">
                </div>
            </div>

            <div class="lostbelt-col">
                <img id="map" src="Assets/Lostbelt4.png" alt="">
                <div class="layer">
                    <img src="Assets/Arjuna-removebg-preview.png" alt="">
                </div>
            </div>

            <div class="lostbelt-col">
                <img id="map" src="Assets/Lostbelt5.png" alt="">
                <div class="layer">
                    <img src="Assets/Odysseus.png" alt="">
                </div>

            </div>

            <div class="lostbelt-col">
                <img id="map" src="Assets/olympus.png" alt="">
                <div class="layer">
                    <img src="Assets/Zeus.png" alt="">
                </div>
            </div>






        </div>



    </section>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>

</body>

</html>
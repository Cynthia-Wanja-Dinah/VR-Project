<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Topics</title>
    <style>


body{
    background-color: grey;
    background-repeat: no-repeat;
    background-size: cover;
    
}
#topics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    margin-top: 200px;
}

.article-container {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(2, auto);
    grid-gap: 20px;
}

.article {
    text-align: center;
    border: 1px solid #ddd;
    padding: 20px;
}


.article img {
  width: 100%;
  height: auto;
}

.article-container:nth-child(2) .article img {
  width: 80%;
  height: 40vh;
}


.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4db35e;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
}


 
    </style>

<link rel="stylesheet" href="styles.css">

</head>
<body>
     <!--==================== HEADER ====================-->
<header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                   Geography hub
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#learn" class="nav__link">Learn</a>
                        </li>

                        <a href="#quiz" class="button button--ghost">Quizzes & Puzzles</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

        <main class="main">


<div>
<h1>Biology Topics</h1>
</div>

<section id="topics">

<div class="article-container">
    <div class="article">
        <img src="images\brain.jpg" alt="Understanding Anxiety Disorders">
        <h3>Brain</h3>
        <a href="desert.php" class="button">Read More</a>
        <a href="brain.html" class="button">Take a quiz</a>
    </div>
    <!-- Add more articles here -->
</div>

<div class="article-container">
    <div class="article">
        <img src="images\heart.avif" alt="Understanding Anxiety Disorders">
        <h3>Heart</h3>
        <a href="heart.php" class="button">Read More</a>
        <a href="heart.html" class="button">Take a quiz</a>
    </div>
    <!-- Add more articles here -->
</div>
<div class="article-container">
    <div class="article">
        <img src="images\human.jpg" alt="Understanding Anxiety Disorders">
        <h3>Internal Stractures</h3>
        <a href="internal.php" class="button">Read More</a>
        <a href="internal.html" class="button">Take a quiz</a>
    </div>

    
    <!-- Add more articles here -->
</div>

</section>

<!--==================== FOOTER ====================-->
<footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="assets/img/logo.png" alt="" class="footer__logo-img">
                          Geography Hub
                        </a>

                        <p class="footer__description">Enjoy the adventure <br> of your life.</p>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">About</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Learn</h3>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Quizzes</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Questions</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Articles</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Geography hub. All rigths reserved</span>

                <img src="assets/img/footer1-img.png" alt="" class="footer__img-one">
                <img src="assets/img/footer2-img.png" alt="" class="footer__img-two">
            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->



</body>
</html>

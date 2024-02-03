<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSE | <?= $title ?></title>
    <link rel="stylesheet" href="public/style/bootstrap.min.css">
    <link rel="stylesheet" href="public/style/main.css">
</head>

<body class="">
    <header>
        <div class="container">
            <div class="nav d-none d-lg-flex">
                <div class="lf">
                    <img src="public/img/compony-logo.svg" alt="Sree Sarabheswar Engineering">
                </div>
                <div class="rf">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="machineries.php">Machineries</a>
                    <a href="products.php">Products</a>
                    <span class="bg"><img src="public/img/lumos.svg" alt="Lumos"></span>
                    <a href="contact.php">Contact us</a>
                </div>
            </div>
            <div class="mob-nav d-lg-none">
                <div class="mob-lf">
                    <img class="logo" src="img/company-logo.svg" alt="Sree Sarabheswar Engineering">
                </div>
                <div class="mob-rf">
                    <span class="bg"><img src="img/lumos.svg" alt="Lumos"></span>
                    <button class="menu" aria-label="Main Menu">
                        <svg width="50" height="100" viewBox="0 0 100 100">
                            <path class="line line1"
                                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3"
                                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </button>
                </div>
                <div class="mob-slider d-lg-none">
                    <ul>
                        <li><a href="index.php">Home</a><i class="fa-solid fa-angle-right"></i></li>
                        <li><a href="about.php">About</a><i class="fa-solid fa-angle-right"></i></li>
                        <li><a href="machineries.php">Machineries</a><i class="fa-solid fa-angle-right"></i></li>
                        <li><a href="products.php">Products</a><i class="fa-solid fa-angle-right"></i></li>
                        <li><a href="contact.php">Contact Us</a><i class="fa-solid fa-angle-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
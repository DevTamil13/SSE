<footer>
    <section>
        <div class="container">
            <div class="foot-cont mb-5">
                <img src="public/img/compony-logo.svg" alt="Sree Sarabheswar Engineering">
                <span class="tag">
                    <p>Unleashing the</p>
                    <p>Power of precision !</p>
                </span>
            </div>
            <div class="useful-links">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="machineries.php">Machineries</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="right-pane">
                    <div class="social-links">
                        <ul>
                            <li><img src="public/img/insta.png" alt="Instagram link"></li>
                            <li><img src="public/img/whatsapp.png" alt="Whatsapp link"></li>
                            <li><img src="public/img/phone.png" alt="Call"></li>
                            <li><img src="public/img/mail.png" alt="Mail"></li>
                        </ul>
                        <span>&#169; &nbsp;&nbsp;SRI SARABHESWAR ENGINEERING</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyrights">
        <div class="marquee-cont">
            <div class="marquee marquee-3">
                <div class="mrq-cont scroll">
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                </div>
                <div class="mrq-cont scroll" aria-hidden="true">
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                    <li>COPYRIGHT &nbsp; SRI SARABHESWARAR ENGINEERING - POWERED BY GENZONG</li>
                    <li><img src="public/img/marquee-star-3.svg"></li>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="public/js/bootstrap.min.js"></script>
</body>
<script>
    $('.menu').click(function() {
        $(this).toggleClass('opened')
        const opened = $(this).hasClass('opened')
        console.log(opened)
        $(this).attr('aria-expanded', opened)
        if (opened) {
            $('.mob-slider').addClass('show')
        } else {
            $('.mob-slider').removeClass('show')
        }
    })

    $('.bg').click(function() {
        console.log('Hiii')
        $('body').toggleClass('lumos')
        const bg = $('body').hasClass('lumos')
        console.log(bg)
        if (bg) {
            $('.logo').attr('src', 'public/img/company-logo-light.svg')
            $('.scroll-im').attr('src', 'public/img/scroll-down-arrow-light.svg')
            $('.ast').attr('src', 'public/img/marquee-star-2-light.svg')
            $('.pres').attr('src', 'public/img/precision-1-light.png')
            $('.thred').attr('src', 'public/img/threading-1-light.png')
            $('.fab').attr('src', 'public/img/milling-1-light.png')
            $('.bg>img').attr('src', 'public/img/nox.svg')
            $('.page-star').attr('src', 'public/img/star-primary-light.svg')
            $('.ex-badge').attr('src', 'public/img/exp-badge-light.png')
        } else {
            $('.logo').attr('src', 'public/img/company-logo.svg')
            $('.scroll-im').attr('src', 'public/img/scroll-down-arrow.svg')
            $('.ast').attr('src', 'public/img/marquee-star-2.svg')
            $('.pres').attr('src', 'public/img/precision-1.png')
            $('.thred').attr('src', 'public/img/threading-1.png')
            $('.fab').attr('src', 'public/img/milling-1.png')
            $('.bg>img').attr('src', 'public/img/lumos.svg')
            $('.page-star').attr('src', 'public/img/star-primary.svg')
            $('.ex-badge').attr('src', 'public/img/exp-badge.png')
        }

    })
</script>

</html>
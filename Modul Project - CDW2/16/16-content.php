<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-16">
    <div class="container">
        <div class="page_content">
            <!-- Carousel Swiper -->
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/slide1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/slide2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/slide3.jpg" alt="">
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next custom_btn-next"></div>
                <div class="swiper-button-prev custom_btn-prev"></div>
            </div>

            <!-- Meta content -->
            <div class="meta_content">
                <h2>GALLERY TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>Created: 03 October 2017</span>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>


        <div class="page_content">
            <div class="position-relative">
                <div class="position-absolute" id="img-video" onclick="show()">
                    <img src="images/maxresdefault.jpg" alt="" class="w-100 h-100">
                    <div class="icon-video">
                        <i class="fa fa-youtube-play"></i>
                    </div>
                </div>
                <iframe class="w-100 border-0" height="600" src="Videos/modul16.mp4"></iframe>
            </div>
            <!-- Meta content -->
            <div class="meta_content">
                <h2>VIDEO TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>Created: 03 October 2017</span>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>

        <div class="page_content">
            <div class="audio">
                <iframe
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/326283592&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"
                    class="w-100" height="600"></iframe>
            </div>
            <!-- Meta content -->
            <div class="meta_content">
                <h2>AUDIO TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>Created: 03 October 2017</span>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>

        <div class="page_content">
            <div class="images_standard">
                <img src="images/slide2.jpg" alt="" class="w-100">
            </div>
            <!-- Meta content -->
            <div class="meta_content">
                <h2>STANDARD TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>Created: 03 October 2017</span>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>

        <div class="page_content">
            <div class="info-quote jumbotron">
                <i class="fa fa-quote-left"></i>
                <p>I found a perfect product and partner with JoomlaShine! I couldn't possibly learn all about templates
                    by myself, starting from scratch. They have such professional, complete but configurable templates
                    with many, many options: lots of user positions!, colors, module configurations... with great help
                    and nice people! Thanks JoomlaShine!</p>
                <p>Harry Hart</p>
            </div>
            <!-- Meta content -->
            <div class="meta_content">
                <h2>QUOTE TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>Created: 03 October 2017</span>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>

        <div class="line-top"></div>
        <div class="item-click">
            <a href="">Link Type</a>
        </div>

        <div class="pagination">
            <div class="couter">
                Page 1 of 2
            </div>
            <div class="number_page d-flex">
                <div class="btn-page disabled"><a href="">Start</a></div>
                <div class="btn-page disabled"><a href="">Prev</a></div>
                <div class="btn-page active d-none d-sm-block"><a href="">1</a></div>
                <div class="btn-page d-none d-sm-block"><a href="" class="pagenav">2</a></div>
                <div class="btn-page"><a href="" class="pagenav">Next</a></div>
                <div class="btn-page"><a href="" class="pagenav">End</a></div>
            </div>
        </div>
    </div>
</div>

<script src="js/swiper/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

function show() {
    var el = document.getElementById("img-video");
    el.style.display = "none";
}
</script>
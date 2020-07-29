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
            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Meta content -->
            <div class="meta_content">
                <h2>GALLERY TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <time>Created: 03 October 2017</time>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>


        <div class="page_content">
            <!-- Meta content -->
            <div class="meta_content">
                <h2>VIDEO TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <time>Created: 03 October 2017</time>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>

        <div class="page_content">
            <!-- Meta content -->
            <div class="meta_content">
                <h2>AUDIO TYPE</h2>
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <time>Created: 03 October 2017</time>
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
                    <time>Created: 03 October 2017</time>
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
                    <time>Created: 03 October 2017</time>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam
                    auctor eleifend nunc non venenatis. Donec ac nulla lectus.</p>
                <a href="" class="btn_redmore">READ MORE...</a>
            </div>
        </div>

        <div class="item-click">
            <a href="">Link Type</a>
        </div>

        <div class="pagination">
            <p class="couter">
                Page 1 of 2
            </p>
            <ul class="number_page">
                <li> <a href="">Start</a>
                </li>
                <li> <a href="">Prev</a>
                </li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">Next</a></li>
                <li><a href="">End</a></li>
            </ul>
        </div>
    </div>
</div>
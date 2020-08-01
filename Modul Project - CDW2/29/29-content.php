<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-29">
    <div class="container">
        <div class="detail_description mt-4">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Swiper -->
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url('images/popular-properties-1.png')">
                            </div>
                            <div class="swiper-slide" style="background-image:url('images/popular-properties-2.png')">
                            </div>
                            <div class="swiper-slide" style="background-image:url('images/popular-properties-3.png')">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-black"></div>
                        <div class="swiper-button-prev swiper-button-black"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url('images/popular-properties-1.png')">
                            </div>
                            <div class="swiper-slide" style="background-image:url('images/popular-properties-2.png')">
                            </div>
                            <div class="swiper-slide" style="background-image:url('images/popular-properties-3.png')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <h3>For Sale</h3>
                    <ul class="table_info">
                        <li><b>Created on:</b>&emsp;09-11-2011 00:00:00</li>
                        <li><b>Square Free:</b>&emsp;80 Sqmt</li>
                        <li><b>Bedroom:</b>&emsp;4</li>
                        <li><b>Bathrooms:</b>&emsp;2</li>
                        <li><b>Rooms:</b>&emsp;5</li>
                        <li><b>Floors:</b>&emsp;1</li>
                        <li><b>Rating:</b>&emsp;<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li><b>Category:</b>&emsp;<span class="text-green">Villa</span></li>
                        <li><b>Tags:</b>&emsp;<span class="text-green">#Ciputra</span> <span
                                class="text-green">#A1</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="report">
            <div class="property-title">
                <h2>CIPUTRA A1 <a href=""><img src="images/report.png" alt=""></a></h2>
                <span class="pull-right text-price">€ 500.00</span>
                <span>180 West College Street, Abbeville, AL</span>
            </div>

            <div class="content_text">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <div class="text-justify">
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                            </p>
                            <p>littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                humanitatis
                                per
                                seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                clari, fiant
                                sollemnes in futurum.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="box-note">
                            <strong>Open for Inspection Times</strong>
                            <div class="note_small">No inspections are currently scheduled</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="property_meta">
            <span><i class="fa fa-arrows" aria-hidden="true"></i>&nbsp;Get direction</span>
            <span class="pull-right">
                <i class="fa fa-print" aria-hidden="true"></i><span>&nbsp;Print this page</span>&emsp;
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span>&nbsp;PDF</span>&emsp;
                <i class="fa fa-th-list" aria-hidden="true"></i><span>&nbsp;Add to compare list</span>
            </span>
        </div>

        <div class="infomation_detail mt-4 mb-4">
            <h4>PROPERTY INFORMATION</h4>
            <div class="row">
                <ul class="col-lg-6 col-12">
                    <li><span class="text-boild">Fact</span></li>
                    <li><span class="text-boild">Lot:</span>&emsp;125.00</li>
                    <li><span class="text-boild">Built In:</span>&emsp;2005</li>
                    <li><span class="text-boild">Contruction</span></li>
                    <li><span class="text-boild">Unit Count:</span>&emsp;1</li>
                    <li><span class="text-boild">Laudry:</span>&emsp;In Unit</li>
                </ul>
                <ul class="col-lg-6 col-12 col-12">
                    <li><span class="text-boild">Cooling:</span>&emsp;Center</li>
                    <li><span class="text-boild">Heating:</span>&emsp;Center</li>
                    <li><span class="text-boild">Single Family:</span>&emsp;Yes</li>
                    <li><span class="text-boild">Structure Type:</span>&emsp;Other</li>
                    <li><span class="text-boild">Other info</span></li>
                    <li><span class="text-boild">Pare#:</span>&emsp;10000000121212000</li>
                </ul>
            </div>
        </div>

        <div class="infomation_detail">
            <h4>NEIGHBORHOOD</h4>
            <div class="row">
                <ul class="col-lg-6 col-12">
                    <li><span class="text-boild">School:</span>&emsp;25 minutes by Car</li>
                    <li><span class="text-boild">Coffee Shop:</span>&emsp;5 minutes by Walk</li>
                </ul>
                <ul class="col-lg-6 col-12 col-12">
                    <li><span class="text-boild">Cinima:</span>&emsp;15 minutes by Walk</li>
                    <li><span class="text-boild">Airport:</span>&emsp;30 minutes by Train</li>
                </ul>
            </div>
        </div>

        <div class="feutures mb-4">
            <h4>FEATURES</h4>
            <h5>GENERAL AMENITIES</h5>
            <div class="row" id="line-content">
                <div class="col-lg-4" id="hover-grey">
                    <span>Cable TV</span>
                </div>
                <div class="col-lg-4" id="hover-grey">
                    <span>Electric hot water</span>
                </div>
            </div>
            <h5>ENERGY SAVINGS AMENITIES</h5>
            <div class="row" id="line-content">
                <div class="col-lg-4" id="hover-grey">
                    <span>Gas Hot Water</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Swiper JS -->
<script src="js/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    loop: true,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs,
    },
});
</script>
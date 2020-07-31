<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-27">
    <div class="container">
        <div class="pt-4 pb-4">
            <!-- row 1 -->
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/country-house.png" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Country House (0) <i class="fa fa-wifi"
                                    aria-hidden="true"></i></a>
                        </h3>
                        <p>Including country houses, rural homes, country real estate</p>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/villa.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Villa (2) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including villa with pool, garden or yard; near the sea or right in town</p>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/apartment.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Apartment (2) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including condos, apartments, penthouse</p>
                    </div>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/office.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Office (1) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including sharing workplace, few rooms or whole building</p>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/house.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">House (4) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including all houses in streets: 1 bedroom, 2 bedrooms...</p>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/building.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Buiding (0) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including whole building with long term rental or short term rental</p>
                    </div>
                </div>
            </div>

            <!-- row 3 -->
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/shop.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Shop (0) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including shop on street , in retail parks and shopping central</p>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="property-img">
                        <img src="images/acreage.jpg" alt="">
                    </div>

                    <div class="property_content">
                        <h3 class="pt-4 pb-2"><a href="">Acreage (0) <i class="fa fa-wifi" aria-hidden="true"></i></a>
                        </h3>
                        <p>Including farms, ranches, waterfront, forest, cottage lots, rural land...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
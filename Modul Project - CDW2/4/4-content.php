<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-4">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center position-relative w-100 box-title mb-4">
            <h3 class="mb-0 text-center"><span>POPUPLAR PROPERTIES</span></h3>
        </div>

        <!-- row 1 -->
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="item_img">
                    <img src="images/best-price.png" alt="" class="img-item">
                </div>
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            29043, Family Home
                            <span class="pull-right price">€ 235.000</span>
                        </h4>
                        <div class="address_venue"><span>15 Sun Street, Abbeville, 33133, AL, Florida</span></div>
                    </div>

                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 400.00
                        <span class="pull-right"><i class="fa fa-taxi" aria-hidden="true"></i> Yes &emsp; <i
                                class="fa fa-bath" aria-hidden="true"></i> 4 &emsp; <i class="fa fa-bed"
                                aria-hidden="true"></i> 4</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="item_img">
                    <img src="images/popular-properties-1" alt="" class="img-item">
                </div>
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            25243, Caputra A1
                            <span class="pull-right price">€ 500.000</span>
                        </h4>
                        <div class="address_venue"><span>180 West College Street, Abbeville, AL</span></div>
                    </div>

                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 80.00
                        <span class="pull-right"><i class="fa fa-bath" aria-hidden="true"></i> 2 &emsp; <i
                                class="fa fa-bed" aria-hidden="true"></i> 4</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="item_img">
                    <img src="images/popular-properties-3" alt="" class="img-item">
                </div>
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            23125, Villa la Vita
                            <span class="pull-right price">€ 2.299.000</span>
                        </h4>
                        <div class="address_venue"><span>1434 Commodore Wy, Abbeville, 33019 , AL, US</span></div>
                    </div>

                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 30.00
                        <span class="pull-right"><i class="fa fa-taxi" aria-hidden="true"></i> Yes &emsp; <i
                                class="fa fa-bath" aria-hidden="true"></i> 2 &emsp; <i class="fa fa-bed"
                                aria-hidden="true"></i> 2</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- row 2 -->
        <div class="row mt-4 mb-4">
            <div class="col-lg-4 col-12">
                <div class="item_img">
                    <img src="images/popular-properties-4.png" alt="" class="img-item">
                </div>
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            523, Penthouse Sky Dream
                            <span class="pull-right price">€ 1.100</span>
                        </h4>
                        <div class="address_venue"><span>3535 S Ocean Dr Unit: Ph2603, 33019, AK, US</span></div>
                    </div>

                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 50.00
                        <span class="pull-right"><i class="fa fa-taxi" aria-hidden="true"></i> 1 &emsp; <i
                                class="fa fa-bath" aria-hidden="true"></i> 3 &emsp; <i class="fa fa-bed"
                                aria-hidden="true"></i> 4</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="item_img">
                    <img src="images/popular-properties-5" alt="" class="img-item">
                </div>
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            12676, Beach with pool
                            <span class="pull-right price">€ 1.500</span>
                        </h4>
                        <div class="address_venue"><span>5 Sinnamon Beach Way, Abbeville, 32137, AL, US</span></div>
                    </div>

                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 100.00
                        <span class="pull-right"><i class="fa fa-taxi" aria-hidden="true"></i> 34 &emsp;<i
                                class="fa fa-bath" aria-hidden="true"></i> 3 &emsp; <i class="fa fa-bed"
                                aria-hidden="true"></i> 7</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="item_img">
                    <img src="images/popular-properties-6" alt="" class="img-item">
                </div>
                <div class="item_content">
                    <div class="pt-4 pb-4">
                        <h4>
                            645, Vacation Rental
                            <span class="pull-right price">€ 1.500</span>
                        </h4>
                        <div class="address_venue"><span>5 Sinnamon Beach Way, Abbeville, 32137, AL, US</span></div>
                    </div>

                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 100.00
                        <span class="pull-right"><i class="fa fa-taxi" aria-hidden="true"></i> 34 &emsp; <i
                                class="fa fa-bath" aria-hidden="true"></i> 3 &emsp; <i class="fa fa-bed"
                                aria-hidden="true"></i> 7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
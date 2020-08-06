<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-6">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center position-relative w-100 box-title mb-4">
            <h3 class="mb-0 text-center"><span>BEST PRICES</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="item_produce">
                    <img src="images/best-price.png" alt="" class="img_produce">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="meta-product">
                    <h4 class="pt-2 pb-2">29043, Family Home <span class="pull-right price">€ 235.000</span></h4>
                    <div class="adress">
                        <span>Property: <span class="propertise">For Sale</span></span><br>
                        <span>15 Sun Street, Abbeville, 33133, AL, Florida</span>
                    </div>
                    <p class="pt-4 pb-4">The Wyndham New Yorker Hotel is a historical landmark and one of the most
                        famous hotels in New
                        York City. If what you're looking for is a convenient location and spacious accommodations, ...
                    </p>
                    <div class="meta-property pt-2 pb-2">
                        <i class="fa fa-square" aria-hidden="true"></i> 400.00
                        <span class="pull-right"><i class="fa fa-taxi" aria-hidden="true"></i> Yes &emsp; <i
                                class="fa fa-bath" aria-hidden="true"></i> 4 &emsp; <i class="fa fa-bed"
                                aria-hidden="true"></i> 4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
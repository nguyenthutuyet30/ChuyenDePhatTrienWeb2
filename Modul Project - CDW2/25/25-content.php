<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-25">
    <div class="cover-bg pt-4 pb-4">
        <div class="container">
            <h2>EXPLORE</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb custom-breadcrumb">
                    <li class="breadcrumb-item custom-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item custom-item"><a href="#">Explore</a></li>
                    <li class="breadcrumb-item custom-item"><a href="#">Menu Styles</a></li>
                    <li class="breadcrumb-item custom-item"><a href="#">Side Menu</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12">
                <div class="box-style">
                    <h3>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        "LIGHTBOX-1" STYLE
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut
                        elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.</p>
                </div>

                <div class="box-nd-style mt-4 mb-4">
                    <h3 class="text-thin">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        "LIGHTBOX-2" STYLE
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut
                        elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.</p>
                </div>

                <div class="box-rd-style">
                    <h3 class="text-thin">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        "SOLID-1" STYLE
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut
                        elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div>
                    <h2>MODULE STYLES</h2>
                    <div class="date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <time>Create: 01 April 2011</time>
                    </div>
                    <p>With the powerful Sun Framework, module styles in JSN templates, starting from JSN Reta 2, will
                        no longer be limited in a fixed number of boxed designs. For module styling, it's totally up to
                        users to decide the styling properties of the modules. Take a look around to see how module
                        styles are applied.</p>
                    <p>Module styles are configured inside Style tab (Style --> Module). You no longer need to remember
                        the name of the module style or go through the document to find out a style name, as it can be
                        selected within the module.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-xs-12">
                <div class="box-right-style">
                    <h3>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        "SOLID-2" STYLE
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut
                        elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.</p>
                </div>

                <div class="box-right-nd-style mt-4 mb-4">
                    <h3 class="text-thin">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        "RICHBOX-2" STYLE
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut
                        elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.</p>
                </div>

                <div class="box-right-rd-style mt-4 mb-4">
                    <h3 class="text-thin">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        "RICHBOX-1" STYLE
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut
                        elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.</p>
                </div>
            </div>
        </div>
    </div>
</div>
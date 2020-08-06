<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-14">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9"></div>
            <div class="col-lg-3 col-md-3">
                <div class="box-menu">
                    <h3>EXPLORE</h3>
                    <ul class="slidemenu">
                        <li>
                            <a href="">Color Variations</a>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-angle-left"></i>Menu Style</a>
                            <ul class="slidemenu_child">
                                <li><a href="">Top Menu</a></li>
                                <li><a href="">Main Menu</a></li>
                                <li><a href="">Slide Menu</a></li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-angle-left"></i>Design</a>
                            <ul class="slidemenu_child">
                                <li><a href="">Fonts Styles</a></li>
                                <li><a href="">Typography</a></li>
                                <li><a href="">Module Styles</a></li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-angle-left"></i>Layout</a>
                            <ul class="slidemenu_child">
                                <li class="parent">
                                    <a href="">Module Positions <i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Left | Center | Right</a></li>
                                        <li><a href="">Left | Innerleft | Center</a></li>
                                        <li><a href="">Left | Center | Interright</a></li>
                                        <li><a href="">Center | Interright | Right</a></li>
                                        <li><a href="">Interrleft | Center | Right</a></li>
                                        <li><a href="">Main content only</a></li>
                                    </ul>
                                </li>
                                <li><a href="">RTL Layout</a></li>
                                <li><a href="">Responsive Layout</a></li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-angle-left"></i>Feature</a>
                            <ul class="slidemenu_child">
                                <li class="parent">
                                    <a href=""><i class="fa fa-angle-left"></i>Easy to use</a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Easy to Start</a></li>
                                        <li><a href="">Painless Configuration</a></li>
                                        <li><a href="">Docs & Support</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href=""><i class="fa fa-angle-left"></i>SEO Friendly</a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Full Microdata Support</a></li>
                                        <li><a href="">CSS/JS Compression</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Social Icons</a></li>
                                <li class="parent">
                                    <a href=""><i class="fa fa-angle-left"></i>Free Edition Extensions</a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Content Slider</a></li>
                                        <li><a href="">Page Builder</a></li>
                                        <li><a href="">Image Gallery</a></li>
                                        <li><a href="">Website Mobilizing</a></li>
                                        <li><a href="">Form Builder</a></li>
                                        <li><a href="">Joomla Management</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Cookie Law Compliance</a></li>
                                <li><a href="">Diverse Content Types</a></li>
                            </ul>
                        </li>
                        <li><a href="">Feature</a></li>
                        <li class="parent">
                            <a href=""><i class="fa fa-angle-left"></i>Color Variations</a>
                            <ul class="slidemenu_child">
                                <li><a href="">Orange Color</a></li>
                                <li><a href="">Red Color</a></li>
                                <li><a href="">Social Icons</a></li>
                                <li><a href="">Cyan Color</a></li>
                                <li><a href="">Grey Color</a></li>
                                <li><a href="">Brown Color</a></li>
                                <li><a href="">Green Color</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
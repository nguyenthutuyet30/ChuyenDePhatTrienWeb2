<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-21">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="box-menu">
                    <h3>SIDE MENU & ICONS + RICH TEXT</h3>
                    <ul class="slidemenu">
                        <li class="parent">
                            <a href=""><i class="fa fa-home"></i>&nbsp;Home Page<i class="fa fa-angle-right"></i></a>
                            <ul class="slidemenu_child">
                                <li><a href="">Homepage2</a></li>
                                <li><a href="">Hompage3</a></li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-cubes"></i>&nbsp;Explore<i class="fa fa-angle-right"></i></a>
                            <ul class="slidemenu_child">
                                <li><a href="">Color Variations</a></li>
                                <li class="parent">
                                    <a href="">Menu Styles <i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Top Menu</a></li>
                                        <li><a href="">Main Menu</a></li>
                                        <li><a href="">Side Menu</a></li>
                                        <li><a href="">Tree Menu</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Design <i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Font Styles</a></li>
                                        <li><a href="">Typography</a></li>
                                        <li><a href="">Module Styles</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Agents <i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Module Positions</a></li>
                                        <li><a href="">RTL Layout</a></li>
                                        <li><a href="">Feature</a></li>
                                        <li><a href="">Color Variations</a></li>
                                        <li><a href="">Blog Layout</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Feature</a></li>
                                <li><a href="">Features</a></li>
                                <li><a href="">Color Variations</a></li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-building-o"></i> Design &nbsp;<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="slidemenu_child">
                                <li><a href="">Category Listing</a></li>
                                <li><a href="">Property Listing</a></li>
                                <li><a href="">Property Details</a></li>
                                <li><a href="">Search Property</a></li>
                                <li><a href="">Add property</a></li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-user"></i>&nbsp;Agents &nbsp;</a>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-newspaper-o"></i>&nbsp;Bolg</a>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-file-text-o"></i>&nbsp;Page&nbsp;<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="slidemenu_child">
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact</a></li>
                                <li class="parent">
                                    <a href="">Joomla<i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li class="parent">
                                            <a href="">Articles<i class="fa fa-angle-right"></i></a>
                                            <ul class="slidemenu_level4">
                                                <li><a href="">The Joomla! Project</a></li>
                                                <li><a href="">List Layout</a></li>
                                                <li><a href="">The Joomla! Community</a></li>
                                                <li><a href="">Using Joomla!</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">Newsfeeds <i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href=""><i class="fa fa-qrcode"></i>&nbsp;Ext.Styles<i class="fa fa-angle-right"></i></a>
                            <ul class="slidemenu_child">
                                <li class="parent">
                                    <a href="">K2<i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Categories</a></li>
                                        <li><a href="">Items</a></li>
                                        <li><a href="">latest items</a></li>
                                        <li><a href="">Tags</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Kunena Forum<i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Kunena Category</a></li>
                                        <li><a href="">Recent Topics</a></li>
                                        <li><a href="">General Statistics</a></li>
                                        <li><a href="">Search Topics</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">OS Property<i class="fa fa-angle-right"></i></a>
                                    <ul class="slidemenu_grandchild">
                                        <li><a href="">Category Listing</a></li>
                                        <li><a href="">Property Listing</a></li>
                                        <li><a href="">Property Details</a></li>
                                        <li><a href="">Search Property</a></li>
                                        <li><a href="">Add property</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href=""><i class="fa fa-download"></i>&nbsp;Get it</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-9 col-md-9"></div>
        </div>
    </div>
</div>
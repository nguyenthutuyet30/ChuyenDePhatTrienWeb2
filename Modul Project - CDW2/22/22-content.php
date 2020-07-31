<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-22">
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
        <h2>SIDE MENU</h2>
        <div class="date">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <time>Create: 01 April 2011</time>
        </div>
        <p>Here you can see live demonstration of Side Menu with icons and rich text.</p>
        <p class="arrow-menu">
            <img class="icon-arrow" src="images/arrow-down-left.png" alt="">
            Side Menu is very unique vertical menu with slide-out panels. This menu is extremely efficient when you
            have complex navigation with a lot of menu items.
        </p>
        <p>To setup Side Menu you just need to configure module parameter "<strong>Menu Class Suffix</strong>" ”
            appropriately and the menu system will take care of the rest. There are very detailed instructions in
            template documentation.</p>
        <h3>Side Menu with Icons and Rich Text</h3>
        <p>Side Menu works flawlessly even in RTL layout, in which sub-menu panels will slide out from right to left.
        </p>
        <p class="text-center link-light"><a
                href="/joomla-templates/jsn_reta_2/pro/index.php?option=com_content&view=article&id=96&Itemid=481">See
                Side Menu in RTL layout</a></p>
    </div>
</div>
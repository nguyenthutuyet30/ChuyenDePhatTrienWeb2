<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7">
    <div class="container">
        <h3 class="text-center"><span>Featured agents</span></h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent">
                    <div class="agent_img">
                        <img src="images/luce_das.jpg" alt="">
                    </div>
                    <div class="agent_name text-center pt-4 pb-4">Luce Das</div>
                    <div class="agent_info d-flex flex-row">
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            (00)123456789
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            info@joomlashine.com
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent">
                    <div class="agent_img">
                        <img src="images/mark_reta.jpg" alt="">
                    </div>
                    <div class="agent_name text-center pt-4 pb-4">Mark Reta</div>
                    <div class="agent_info d-flex flex-row">
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            0123456789
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            ag1@gmail.com
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent">
                    <div class="agent_img">
                        <img src="images/reta_agen.jpg" alt="">
                    </div>
                    <div class="agent_name text-center pt-4 pb-4">Reta Agen</div>
                    <div class="agent_info d-flex flex-row">
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            123456789
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            agent@osproperty.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
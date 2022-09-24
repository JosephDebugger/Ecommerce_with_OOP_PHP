<?php



use App\Banners;


$banner = new Banners;
$banners = $banner->isActiveIndex();
var_dump($banners);
?>
<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <?php
                            $_active= 'active';
                            foreach ($banners as $banner):
                            ?>
                        <div class="item <?= $_active;?>">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?= $webroot;?>uploads/<?= $banner['picture']; ?>" class="girl img-responsive"
                                    alt="" />
                                <!--									<img src="-->
                                <?//= $webroot;?>
                                <!--uploads/-->
                                <?//= $banner['picture']; ?>
                                <!--"  class="pricing" alt="" />-->
                            </div>
                        </div>
                        <?php
                                $_active='';
                            endforeach;?>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->
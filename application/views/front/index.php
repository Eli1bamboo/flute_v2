<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <? include(dirname(__FILE__)."/common/head.php"); ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid" id="wrapper">
            <? include(dirname(__FILE__)."/common/header.php"); ?>

            <section class="fullwidth-carousel">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="home-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <?
                                if(is_array($slider)){
                                    $i = 0;
                                    foreach($slider as $slide){
                            ?>
                                <li data-target="#home-carousel" data-slide-to="<?= $i; ?>" class="<?= $i == 0 ? 'active' : "" ?>"></li>
                            <?
                                        $i++;
                                    }
                                }
                            ?>
                            </ol>

                            <div class="carousel-inner">
                                <?
                                    if(is_array($slider)){
                                        $i = 0;
                                        foreach($slider as $slide){
                                ?>
                                <div class="item <?= $i == 0 ? 'active' : "" ?>">
                                    <a href="<?= base_url(); ?>modelo/<?= $slide->get_id()?>/<?= urlencode(strip_tags($slide->mod_name))?>">
                                            <img src="<?= $slide->banner_image; ?>" class="img-responsive"/>
                                        <div class="carousel-caption">
                                            <h3>
                                                <?= $slide->mod_name; ?>
                                            </h3>
                                            <p>
                                                <?= $slide->slogan; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?
                                                $i++;
                                            }
                                        }
                                    ?>
                                </a>
                            </div>

                            <!-- <a class="left carousel-control" href="#home-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#home-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="fullwidth-3cols" id="fullwidth-3cols">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title">
                            <h2>
                                Qué sucede en Chery Fengtai
                            </h2>
                            <span class="line"></span>
                        </div>
                        <?
                            if(is_array($news)){
                                foreach($news as $new){
                        ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $new->list_image?>" alt="">
                            </div>

                            <h3 class="dot-ellipsis dot-height-100 dot-resize-update">
                                <?= $new->title?>
                            </h3>

                            <p class="dot-ellipsis dot-height-150 dot-resize-update">
                                <?= strip_tags($new->description)?>
                            </p>
                            <a href="<?= base_url(); ?>novedad/<?= $new->get_id()?>/<?= urlencode($new->title)?>" class="read-more">
                                LEER MÁS
                            </a>
                        </div>
                        <?
                                }
                            }
                        ?>
                    </div>
                </div>
            </section>

            <? include(dirname(__FILE__)."/common/common_contact.php"); ?>

            <? include(dirname(__FILE__)."/common/common_maps.php"); ?>

            <? include(dirname(__FILE__)."/common/footer.php"); ?>

        </div>
        <? include(dirname(__FILE__)."/common/footer-scripts.php"); ?>
    </body>
</html>

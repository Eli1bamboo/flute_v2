<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <? include "common/head.php"; ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid" id="wrapper">
            <? include "common/header.php"; ?>

            <section class="fullwidth-3cols" id="fullwidth-3cols">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title">
                            <h2>
                                Novedades en el mundo <br> de Chery Fengtai
                            </h2>
                            <span class="line"></span>
                        </div>
                        <?
                                foreach($this->news_model->news as $new){
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

                            <a href="<?= base_url(); ?>novedad/<?= $new->get_id()?>/<?= urlencode($new->title)?>" class="read-more">LEER MÁS</a>
                        </div>
                        <?
                            }
                        ?>
                    </div>
                </div>
            </section>


            <? include "common/common_contact.php"; ?>

            <? include "common/common_maps.php"; ?>

            <? include "common/footer.php"; ?>

        </div>
        <? include "common/footer-scripts.php"; ?>
    </body>
</html>

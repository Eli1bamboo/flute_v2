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

            <section class="section-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bg" data-parallax="scroll" data-image-src="<?= $this->news_model->main_image?>">

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fullwidth-text">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 section-title">
                                <h2>
                                    <?= $this->news_model->title?>
                                </h2>
                                <span class="line"></span>
                            </div>
                            <div class="col-xs-12">
                                <div class="content">
                                    <h2>
                                        <?= $this->news_model->sub_heading?>
                                    </h2>
                                    <p>
                                        <?= $this->news_model->description?>
                                    </p>
                                </div>
                            </div>
                        </div>
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

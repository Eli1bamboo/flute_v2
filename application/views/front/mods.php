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
        <div class="container-fluid" id="wrapper" name="top">
            <? include "common/header.php"; ?>

            <section class="fullwidth-carousel">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="home-carousel" class="carousel slide mods" data-ride="carousel">
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#home-carousel" data-slide-to="1"></li>
                            </ol> -->

                            <div class="carousel-inner">
                                <div class="item active">
                                        <img src="<?= $this->mods_model->banner_image; ?>" clas="img-responsive"/>
                                    <div class="carousel-caption">
                                        <h3>
                                            <?= $this->mods_model->mod_name; ?>
                                        </h3>
                                        <p>
                                            <?= $this->mods_model->slogan; ?>
                                        </p>
                                    </div>
                                </div>
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

            <section class="model-nav" id="model-nav">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 col-sm-2 nav-item active">
                                <a href="#top"><?= strip_tags(str_replace( $tags , " " , $this->mods_model->mod_name)); ?></a>
                            </div>
                            <div class="col-xs-4 col-sm-2 nav-item">
                                <a href="#design">Diseño</a>
                            </div>
                            <div class="col-xs-4 col-sm-2 nav-item">
                                <a href="#confort">Confort</a>
                            </div>
                            <div class="col-xs-4 col-sm-2 nav-item">
                                <a href="#security">seguridad</a>
                            </div>
                            <div class="col-xs-4 col-sm-2 nav-item">
                                <a href="#specs">ficha técnica</a>
                            </div>
                            <div class="col-xs-4 col-sm-2 nav-item">
                                <a href="#conce">Sucursal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fullwidth-3cols" id="fullwidth-3cols">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title" name="design">
                            <h2>
                                Diseño
                            </h2>
                            <span class="line"></span>
                        </div>
                        <div class="col-xs-12 content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p>
                                        <?= $this->mods_model->design_left; ?>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p>
                                        <?= $this->mods_model->design_right; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $this->mods_model->design_image_1; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $this->mods_model->design_image_2; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $this->mods_model->design_image_3; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fullwidth-3cols grey-section" id="fullwidth-3cols" name="confort">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title">
                            <h2>
                                Confort
                            </h2>
                            <span class="line"></span>
                        </div>
                        <div class="model-carousel-desktop">

                            <?
                                $file_manager = $this->mods_model->file_managers['file_manager_id'];
                                foreach($file_manager->files_list['image_gallery'] as $file)
                                {
                            ?>
                                <div>
                                    <div class="imgLiquidFill">
                                        <img src="<?= $file->file_url; ?><?= $file->file; ?>" alt="">
                                    </div>
                                    <?
                                        if($file->file_title == NULL){

                                        } else{
                                            ?>
                                            <h3>
                                                <?= $file->file_title; ?>
                                            </h3>
                                            <?
                                        }
                                    ?>
                                    <p>
                                        <?= $file->file_description; ?>
                                    </p>
                                </div>
                            <?
                                }
                            ?>

                        </div>

                        <div class="model-carousel-mobile">

                            <?
                                $file_manager = $this->mods_model->file_managers['file_manager_id'];
                                foreach($file_manager->files_list['image_gallery'] as $file)
                                {
                            ?>
                                <div>
                                    <div class="imgLiquidFill">
                                        <img src="<?= $file->file_url; ?><?= $file->file; ?>" alt="">
                                    </div>
                                    <?
                                        if($file->file_title == NULL){

                                        } else{
                                            ?>
                                            <h3>
                                                <?= $file->file_title; ?>
                                            </h3>
                                            <?
                                        }
                                    ?>
                                    <p>
                                        <?= $file->file_description; ?>
                                    </p>
                                </div>
                            <?
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </section>

            <section class="fullwidth-3cols" id="fullwidth-3cols">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title" name="security">
                            <h2>
                                Seguridad
                            </h2>
                            <span class="line"></span>
                        </div>
                        <div class="col-xs-12 content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p>
                                        <?= $this->mods_model->security_left; ?>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p>
                                        <?= $this->mods_model->security_right; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $this->mods_model->security_image_1; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $this->mods_model->security_image_2; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="imgLiquidFill">
                                <img src="<?= $this->mods_model->security_image_3; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-table grey-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title" name="specs">
                            <h2>
                                Ficha Técnica
                            </h2>
                            <span class="line"></span>
                        </div>
                        <?= $this->mods_model->description; ?>
                    </div>
                </div>
            </section>

            <? include "common/common_maps.php"; ?>

            <? include "common/common_contact.php"; ?>

            <? include "common/footer.php"; ?>

        </div>
        <? include "common/footer-scripts.php"; ?>
    </body>
</html>

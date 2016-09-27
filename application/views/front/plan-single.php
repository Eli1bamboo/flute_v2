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
        <div class="container-fluid contact" id="wrapper">
            <? include "common/header.php"; ?>

            <section class="plan-nav">
                <div class="container-fluid">
                    <div class="row">
                        <?
                            if (is_array($plan_nav)) {
                                foreach ($plan_nav as $item) {
                        ?>
                                <div class="nav-item <?= $this->uri->segment(3) == $item->mod_name ? 'active' : "" ?>">
                                    <a href="<?= base_url(); ?>plan/<?= $item->get_id()?>/<?= urlencode($item->mod_name)?>">PLAN <?= $item->mod_name; ?></a>
                                </div>
                        <?
                                }
                            }
                        ?>
                    </div>
                </div>
            </section>

            <section class="plan-header-desktop" style="background: url('<?= $this->plans_model->banner_image; ?>') no-repeat center center; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-md-offset-8">
                            <div class="banner-top">
                                <p class="default">
                                    Plan de ahorro
                                </p>
                                <p class="product-name">
                                    <?= $this->plans_model->mod_name; ?>
                                </p>
                                <p class="product-title">
                                    <?= $this->plans_model->slogan; ?>
                                </p>
                            </div>
                            <div class="banner-center">

                            </div>
                            <div class="banner-bottom">
                                <p class="default">
                                    Cuotas desde
                                </p>
                                <p class="product-price-month">
                                    $<?= $this->plans_model->cuota_pura; ?>
                                </p>
                                <p class="product-price-day">
                                    $<?= $this->plans_model->cuota_dia; ?> por día
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="plan-header-mobile">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 mod-image">
                            <img src="<?= $this->plans_model->banner_image_mobile; ?>" alt="" class="img-responsive"/>
                        </div>
                        <div class="col-xs-12">
                            <div class="banner-top">
                                <p class="default">
                                    Plan de ahorro
                                </p>
                                <p class="product-name">
                                    <?= $this->plans_model->mod_name; ?>
                                </p>
                                <p class="product-title">
                                    <?= $this->plans_model->slogan; ?>
                                </p>
                            </div>
                            <div class="banner-center">

                            </div>
                            <div class="banner-bottom">
                                <p class="default">
                                    Cuotas desde
                                </p>
                                <p class="product-price-month">
                                    $<?= $this->plans_model->cuota_pura; ?>
                                </p>
                                <p class="product-price-day">
                                    $<?= $this->plans_model->cuota_dia; ?> por día
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="plan-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-7">
                            <div class="plan-table">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h4>
                                                    <?= $this->plans_model->table_title; ?>
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr class="table-item">
                                            <td>
                                                <p>
                                                    Precio Regular
                                                </p>
                                                <p>
                                                    Suscrip. + Cuota 1:
                                                </p>
                                            </td>
                                            <td class="text-right">
                                                <p>
                                                    <s>$<?= $this->plans_model->table_bonif; ?></s>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="table-header">
                                            <td colspan="2">
                                                <p>
                                                    Precio Congelado de Internet:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="table-item">
                                            <td colspan="2">
                                                 <?= $this->plans_model->description; ?>
                                            </td>
                                        </tr>
                                        <tr class="table-bottom">
                                            <td>
                                                <p>
                                                    Cuota Pura:
                                                </p>
                                            </td>
                                            <td class="text-right">
                                                <p>
                                                    $<?= $this->plans_model->cuota_pura; ?>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <div class="plan-description">
                                <h3>
                                    Equipamiento de serie
                                </h3>
                                <?
                                    if ($this->plans_model->confort_text == NULL){

                                    } else{
                                        ?>
                                        <div class="product-feature">
                                            <h5>
                                                Confort
                                            </h5>
                                            <p>
                                                <?= $this->plans_model->confort_text; ?>
                                            </p>
                                        </div>
                                        <?
                                    }
                                 ?>

                                 <?
                                     if ($this->plans_model->security_text == NULL){

                                     } else{
                                         ?>
                                         <div class="product-feature">
                                             <h5>
                                                 Seguridad
                                             </h5>
                                             <p>
                                                 <?= $this->plans_model->security_text; ?>
                                             </p>
                                         </div>
                                         <?
                                     }
                                  ?>

                                  <?
                                      if ($this->plans_model->exterior_text == NULL){

                                      } else{
                                          ?>
                                           <div class="product-feature">
                                               <p>
                                                   <?= $this->plans_model->exterior_text; ?>
                                               </p>
                                           </div>
                                          <?
                                      }
                                   ?>
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

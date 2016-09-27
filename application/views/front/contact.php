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

            <section class="section-image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1481.9678794777851!2d-58.52711932607892!3d-34.518844084324634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0ea07ce3707%3A0x39d693b05622d79a!2sPres.+Santiago+Derqui+4781%2C+B1605BGA+Munro%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1468595512395" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>

            <section class="section-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 section-title">
                            <div class="row">
                                <div class="col-xs-12 col-md-5">
                                    <h1>
                                        contacto
                                    </h1>
                                </div>
                                <div class="col-xs-12 col-md-7 contact-info">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <ul class="fa-ul">
                                                <li><i class="fa-li fa fa-phone" aria-hidden="true"></i><span><?= $this->configuration_model->phone?></span></li>
                                                <li><i class="fa-li fa fa-fax" aria-hidden="true"></i><span><?= $this->configuration_model->fax?></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-8">
                                            <ul class="fa-ul">
                                                <li><i class="fa-li fa fa-envelope" aria-hidden="true"></i><span><a href="mailto:<?= $this->configuration_model->email?>"><?= $this->configuration_model->email?></a></span></li>
                                                <li><i class="fa-li fa fa-map-marker" aria-hidden="true"></i><span><?= $this->configuration_model->address?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blue-border"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact">
                <div class="container">
                    <div class="row" id="contact-container">
                        <div class="col-xs-12">
                            <div class="status alert alert-success" style="display: none"></div>
                        </div>
                        <form id="contact-form" class="ajax_form" action="./home/validate_contact_form/contact" method="post" enctype="multipart/form-data">
                            <?
                            $this->admin_forms->label_in_input = false;
                            foreach($page_fields['contact'] as $field => $attr)
                            {
                              echo $this->admin_forms->input_block($field,$attr);
                              echo '<div id="contact_error_'.$field.'" class="contact_msg_error" style="display:none; color: #dd2222; padding-top:10px; position: absolute; bottom: 0;"></div>';
                              echo '</div>';
                              echo '</div>';
                            }?>
                            <div class="col-xs-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <? include(dirname(__FILE__)."/common/footer.php"); ?>

        </div>
        <? include(dirname(__FILE__)."/common/footer-scripts.php"); ?>
    </body>
</html>

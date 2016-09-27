<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-md-2 logo">
                <a href="<?= base_url(); ?>">
                    <img src="<?= base_url(); ?>assets_fe/img/chery-logo.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-8 col-md-10">
                <div class="row">
                    <div class="col-xs-12 contact text-right">
                        <address>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <p>
                                 Devoto: (54 11) 4502 1515
                            </p>
                        </address>
                        <address>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <p>
                                Lanús: (54 11) 4240 2376
                            </p>
                        </address>
                        <address>
                            <a href="<?= base_url(); ?>preguntas/#faq4">
                                contactanos
                            </a>
                        </address>
                    </div>
                    <div class="col-xs-12">
                        <p id="show-nav">
                            <span>
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </span>
                        </p>
                        <div id="main-nav" class="main-nav">
                            <div>
                                <a id="hide-nav">
                                    <span>
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a class="has-submenu">
                                    <span>
                                        modelos
                                    </span>
                                </a>
                                <div class="sub-nav">
                                    <ul>
                                        <?
                                            if (is_array($mods_nav)) {
                                                foreach ($mods_nav as $item) {
                                        ?>
                                        <li>
                                            <a href="<?= base_url(); ?>modelo/<?= $item->get_id()?>/<?= urlencode(strip_tags($item->mod_name))?>">
                                                <?  $tags = array("<div>", "</div>");

                                                    echo strip_tags(str_replace( $tags , " " , $item->mod_name));
                                                ?>

                                            </a>
                                        </li>
                                        <?
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <a href="<?= base_url(); ?>servicios" class="<?= $this->data['section'] == 'service' ? 'active' : "" ?>">
                                    <span>
                                        servicios
                                    </span>
                                </a>
                            </div>

                            <div>
                                <?
                                    if (is_array($plan_nav)) {
                                        foreach ($plan_nav as $item) {
                                            $i = 1;
                                            if ($i == 1) {
                                ?>
                                        <a href="<?= base_url(); ?>plan/<?= $item->get_id()?>/<?= urlencode($item->mod_name)?>">
                                <?
                                            }
                                            $i++;
                                        }
                                    }
                                ?>
                                    <span>
                                        planes de ahorro
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="<?= base_url(); ?>novedades" class="<?= $this->data['section'] == 'news' ? 'active' : "" ?>">
                                    <span>
                                        novedades
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="<?= base_url(); ?>empresa" class="<?= $this->data['section'] == 'about' ? 'active' : "" ?>">
                                    <span>
                                        la empresa
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

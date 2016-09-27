<section class="fullwidth-contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title white">
                <h2 id="faq4">
                    Envíenos sus inquietudes
                </h2>
                <span class="line"></span>
            </div>
            <div class="col-xs-12" id="contact-container">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="contact-form" class="ajax_form" action="<?= base_url(); ?>home/validate_contact_form/contact" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <?
                            $this->admin_forms->label_in_input = false;
                            foreach($page_fields['contact-left'] as $field => $attr)
                            {
                              echo $this->admin_forms->input_block($field,$attr);
                              echo '<div id="contact_error_'.$field.'" class="contact_msg_error" style="display:none; color: white;background: white; position: absolute; top: 55%; right: 2px; width: 10px; height: 10px; border-radius: 100%; overflow: hidden;"></div>';
                              echo '</div>';
                              echo '</div>';
                            }?>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <?
                            $this->admin_forms->label_in_input = false;
                            foreach($page_fields['contact-right'] as $field => $attr)
                            {
                              echo $this->admin_forms->input_block($field,$attr);
                              echo '<div id="contact_error_'.$field.'" class="contact_msg_error" style="display:none; color: white;background: white; position: absolute; top: 45%; right: -12px; width: 10px; height: 10px; border-radius: 100%; overflow: hidden;"></div>';
                              echo '</div>';
                              echo '</div>';
                            }?>
                        </div>
                        <div class="col-xs-12 text-center">
                            <div class="form-group">
                                <?php
                                    if ($this->data['section'] == 'mods') {
                                ?>
                                    <input type="hidden" name="section" value="<?= $this->data['section_form']; ?> <?  $tags = array("<br>", "<div>", "</div>"); echo strip_tags(str_replace( $tags , " " , $item->mods_model->mod_name)); ?>">
                                <?php
                                    } elseif (condition) {
                                ?>
                                    <input type="hidden" name="section" value="<?= $this->data['section_form']; ?> <?= strip_tags($this->plans_model->mod_name); ?>">
                                <?php
                                    } else {
                                        ?>
                                        <input type="hidden" name="section" value="<?= $this->data['section_form']; ?>">
                                        <?php
                                    }
                                ?>
                                <button type="submit" class="btn send-btn">enviar</button>
                                <span class="loading">
                                    <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                    <span class="sr-only">Loading...</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

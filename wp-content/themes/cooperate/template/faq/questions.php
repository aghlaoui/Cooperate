<?php
$id = $args['id'];
$in_page = $args['in_page'];
?>
<div class="rs-faq faq-style1 pt-140 pb-140 md-pt-80 md-pb-80<?php echo ($args['in_page'] == true) ? ' gray-bg30 faq-modify7' : ' faq-modify6' ?>">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-7 md-mb-50">
                <div class="faq-content">
                    <div class="sec-title mb-50">
                        <h2 class="title title11">
                            <?php echo __('Have any questions?', 'cooperate') ?>
                        </h2>
                    </div>
                    <div id="accordion" class="accordion">

                        <?php $c = 1;  ?>
                        <?php while (have_rows('faq_questions', $id)) : the_row() ?>
                            <div class="card<?php echo ($c == 1) ? ' current' : '' ?>">
                                <div class="card-header">
                                    <?php
                                    $class = ($c != 1) ? ' collapsed' : '';
                                    $expended = ($c == 1) ? 'true' : 'false';
                                    $question = sanitize_text_field(get_sub_field('question'));
                                    printf('<a class="card-link%s" href="#" data-bs-toggle="collapse" data-bs-target="#collapse%d" aria-expanded="%s">%s</a>', $class, $c, $expended, $question);
                                    ?>
                                </div>
                                <div id="collapse<?php echo $c ?>" class="collapse<?php echo ($c == 1) ? ' show' : '' ?>" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo sanitize_textarea_field(get_sub_field('answer')) ?>
                                    </div>
                                </div>
                            </div>
                            <?php $c++; ?>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 pl-50 md-pl-15">
                <div class="rs-contact contact-style4<?php echo ($in_page == true) ? ' contact-modify2' : ' contact-modify1' ?>">
                    <div class="contact-wrap">
                        <div class="sec-title mb-25">
                            <h3 class="title title14<?php echo ($in_page == true) ? ' white-color' : '' ?>">
                                <?php echo __('More Questions?', 'cooperate') ?>
                            </h3>
                        </div>
                        <div id="form-messages"></div>

                        <?php
                        if ($args['in_page'] == false) {
                            echo do_shortcode('[contact-form-7 id="630" title="Pricing Form"]');
                        } else {
                            echo do_shortcode('[contact-form-7 id="631" title="FAQ Form"]');
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
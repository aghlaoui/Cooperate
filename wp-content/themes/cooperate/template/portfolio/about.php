<?php
$id = $args['id'];
$description = get_field('pa_description', $id);
$project = get_field('pa_project', $id);
?>
<div class="rs-project project-single pb-130 md-pt-80 md-pb-80" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pr-60 md-pr-15 md-mb-50">
                <div class="sec-title mb-60">
                    <h2 class="title title11 pb-30">
                        <?php echo (isset($description['title'])) ? sanitize_text_field($description['title']) : ''; ?>
                    </h2>
                    <p class="desc desc8">
                        <?php echo (isset($description['description'])) ? sanitize_textarea_field($description['description']) : '' ?>
                    </p>
                </div>
                <!-- Counter Section End -->

                <?php if (have_rows('ps_projects_numbers', 'option')) : ?>
                    <div class="rs-counter counter-style2 bg16" style="background-image: url(<?php echo get_theme_file_uri('assets/images/bg/count-bg1.jpg') ?>);">
                        <div class="container">
                            <div class="row">

                                <?php while (have_rows('ps_projects_numbers', 'option')) : the_row() ?>
                                    <div class="col-lg-4 md-mb-30">
                                        <div class="counter-area">
                                            <div class="counter-list mb-25">
                                                <div class="counter-icon">
                                                    <img src="<?php echo get_theme_file_uri('assets/img/') . esc_html(get_sub_field('icon')) ?>" alt="Counter">
                                                </div>
                                                <div class="counter-number">
                                                    <span class="rs-count"><?php echo esc_html(get_sub_field('number')) ?></span>
                                                    <?php echo (get_sub_field('plus_sign')) ? '<span class="prefix">+</span>' : ''; ?>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <h5 class="title"><?php echo sanitize_text_field(get_sub_field('text')) ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Counter Section End -->
            </div>
            <div class="col-lg-4">
                <div class="project-information bg41" style=" background-image: url(<?php echo get_theme_file_uri('assets/images/bg/pro-sidebar-bg.png') ?>);">
                    <div class="sec-title mb-20">
                        <h2 class="title title8  white-color">
                            <?php echo __('Project information', 'cooperate') ?>
                        </h2>
                    </div>
                    <?php if (have_rows('pa_project', $id)) : ?>
                        <div class="content-wrap">
                            <div class="title-inner mb-20">
                                <h5 class="title">Skills</h5>
                                <p class="desc"><?php echo sanitize_text_field($project['skills']) ?></p>
                            </div>
                            <div class="title-inner mb-20">
                                <h5 class="title">Client</h5>
                                <p class="desc"><?php echo sanitize_text_field($project['client']) ?></p>
                            </div>
                            <div class="title-inner mb-20">
                                <h5 class="title">Completed Date</h5>
                                <p class="desc"><?php echo  sanitize_text_field($project['date_complete']) ?></p>
                            </div>
                            <div class="title-inner mb-20">
                                <h5 class="title">Manager</h5>
                                <p class="desc"><?php echo sanitize_text_field($project['manager']) ?></p>
                            </div>
                            <?php
                            while (have_rows('pa_project', $id)) {
                                the_row();
                                while (have_rows('pa_more_information')) {
                                    the_row();
                                    $label = sanitize_text_field(get_sub_field('title'));
                                    $info = sanitize_text_field(get_sub_field('information'));
                                    printf('<div class="title-inner"><h5 class="title">%s</h5><p class="desc">%s</p></div>', $label, $info);
                                }
                            }
                            ?>
                        </div>
                    <?php else : ?>
                        <div class="content-wrap">
                            <div class="no-info-project">
                                <i class="ri-file-unknow-line"></i>
                                <?php echo __('No Information About The Project', 'cooperate') ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
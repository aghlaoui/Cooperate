<?php $style = ($args['bg'] == true) ? ' style="background-image: url(' . get_theme_file_uri('assets/img/price-new-bg11.jpg') . ');"' : ''; ?>
<div class="pricing-container rs-pricing-container pricing-style1 pricing-modify2 inner-pricing1 pt-140 pb-140 md-pt-80 md-pb-80" <?php echo $style ?>>
    <div class="container">
        <div class="sec-title mb-50">
            <h2 class="title title11">
                <?php echo __('Simple pricing for you.', 'cooperate') ?>
            </h2>
        </div>
    </div>
    <div class="pricing-switcher">
        <p class="fieldset mnt-ac">
            <?php
            global $plans;
            $id = $args['id'];
            while (have_rows('pp_plan_details', $id)) {
                the_row();
                while (have_rows('plans_prices')) {
                    the_row();
                    while (have_rows('plans_types_sep')) {
                        the_row();
                        $init_plan_type[] = sanitize_text_field(get_sub_field('plan_type'));
                    }
                }
            }
            $plan_types = array_unique($init_plan_type);
            $i = 0;
            foreach ($plan_types as $type) {
                $lower_type = strtolower($type);
                $class = ($i == 0) ? 'rs-mnt' : 'rs-yrs';
                $classid = ($i == 0) ? 'rsmnt' : 'rsyrs';
                $checked = ($i == 0) ? 'checked=""' : '';
                printf(
                    '<input type="radio" name="duration-1" value="%s" id="%s-1" %s>
                    <label for="%s-1" id="%s" class="%s">%s </label>',
                    $lower_type,
                    $lower_type,
                    $checked,
                    $lower_type,
                    $classid,
                    $class,
                    $type
                );
                $i++;
            }
            ?>
            <span class="switch"></span>
        </p>
    </div>
    <div class="container">
        <ul class="pricing-list bounce-invert">
            <?php while (have_rows('pp_plan_details', $id)) : the_row() ?>
                <?php $j = 0; ?>
                <?php while (have_rows('plans_prices')) : the_row() ?>
                    <li class="exclusive md-mb-30">
                        <ul class="pricing-wrapper">
                            <?php
                            $k = 0;
                            $in_features = array();
                            while (have_rows('plan_features')) {
                                the_row();
                                $in_features[] = sanitize_text_field(get_sub_field('plan_feature_select'));
                            }
                            ?>
                            <?php while (have_rows('plans_types_sep')) : the_row() ?>
                                <li data-type="<?php echo sanitize_text_field(strtolower(get_sub_field('plan_type'))); ?>" class="<?php echo ($k == 0) ? 'is-visible' : 'is-hidden' ?>">

                                    <header class="pricing-header">
                                        <h3 class="title"><?php echo $plans[$j]['plans_names'] ?></h3>
                                        <div class="price-inner">
                                            <div class="price"><?php echo esc_html(get_sub_field('plan_price')) ?></div>
                                            <span>MAD/ Month</span>
                                        </div>
                                    </header>
                                    <div class="pricing-body">
                                        <div class="features">
                                            <ul>
                                                <?php
                                                while (have_rows('pp_plans_details', 'option')) {
                                                    the_row();
                                                    while (have_rows('plans_features')) {
                                                        the_row();
                                                        echo '<li ';
                                                        $f_class = 'class="close-icon"';
                                                        foreach ($in_features as $feature) {
                                                            if ($feature == get_sub_field('features')) {
                                                                $f_class = '';
                                                            }
                                                        }
                                                        echo $f_class . '>' . get_sub_field('features') . '</li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <footer class="pricing-footer">
                                        <a href="<?php echo esc_url(site_url('contact-us')) ?>"><?php echo __('Get Started', 'cooperate') ?></a>
                                    </footer>
                                </li>
                                <?php $k++; ?>
                            <?php endwhile; ?>

                        </ul>
                    </li>
                    <?php $j++; ?>
                <?php endwhile; ?>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
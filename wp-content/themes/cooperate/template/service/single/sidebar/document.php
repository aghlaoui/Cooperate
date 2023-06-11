<div class="annual-report">
    <div class="images">
        <img src="<?php echo get_theme_file_uri('assets/images/services/services-details/service-img1.png') ?>" alt="Images">
    </div>
    <div class="content-txt">
        <h4 class="title"><?php echo sanitize_text_field(get_field('ssd_title', 'option')) ?></h4>
        <div class="btn-part">
            <a class="readon consultant get-yellow blue-light download" target="_blank" href="<?php echo esc_url(get_field('ssd_document', 'option')) ?>"><?php echo __('Free Download', 'cooperate') ?></a>
        </div>
    </div>
</div>
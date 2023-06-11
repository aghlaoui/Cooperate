<style>
    .let-talk-part {
        background-image: url(<?php echo 'https://business.local/wp-content/uploads/2023/05/sidebar-bg-401x330.png' ?>);
    }

    @media screen and (max-width: 1200px) {
        .let-talk-part {
            background-image: url(<?php echo 'https://business.local/wp-content/uploads/2023/05/sidebar-bg-283x330.png' ?>);
        }
    }

    @media screen and (max-width: 992px) {
        .let-talk-part {
            background-image: url(<?php echo 'https://business.local/wp-content/uploads/2023/05/sidebar-bg-672x330.png' ?>);
        }
    }

    @media screen and (max-width: 766px) {
        .let-talk-part {
            background-image: url(<?php echo 'https://business.local/wp-content/uploads/2023/05/sidebar-bg-513x276.png' ?>);
        }
    }
</style>

<div class="let-talk-part mt-30">
    <div class="content-wrap">
        <h3 class="title"><?php echo __('Let’s Talk', 'cooperate') ?></h3>
        <p class="desc"> <?php echo __('Call for anytime if<br>emergency', 'cooperate') ?></p>
        <div class="btn-part mt-25">
            <a class="readon contact-us" href="<?php echo esc_url(site_url('contact-us')) ?>">
                <?php echo __('Contact Us', 'cooperate') ?>
                <i class="ri-arrow-right-up-line"></i>
            </a>
        </div>
    </div>
</div>
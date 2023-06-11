<?php

/**
 * NewsLetter Section
 */
get_template_part('template/footer/newsletter');

?>

</div>
<!-- Main content End -->

<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer footer-main-home footer-style1" style="background-image: url(<?php echo get_theme_file_uri('assets/img/footer-main.jpg') ?>);">
    <?php
    /**
     * Footer Top Section
     */
    get_template_part('template/footer/footer-top');

    /**
     * Footer Bottom Section
     */
    get_template_part('template/footer/footer-bottom');
    ?>

</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="primary-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
<?php wp_footer() ?>
</body>


</html>
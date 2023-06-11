<?php
function custom_comment($comment, $args, $depth)
{
    $comment_author = sanitize_text_field(get_comment_author());
    $comment_date = get_comment_date();
    $comment_text = sanitize_text_field(get_comment_text());
    $gravatar = esc_url(get_avatar_url($comment, 150));
?>
    <div class="contact-wrap">
        <div class="images-wrap">
            <img src="<?php echo $gravatar ?>" alt="images">
        </div>
        <div class="content-wrap">
            <span><?php echo $comment_author ?></span>
            <span class="date-comment"><?php echo $comment_date ?></span>
            <p class="description"><?php echo $comment_text ?></p>
        </div>
    </div>
<?php } ?>

<div class="comment-note">
    <?php if (have_comments()) : ?>
        <h3 class="comment-reply-title"><?php echo __('Recent Comments:', 'cooperate') ?></h3>
        <div class="contact-widget comment-widget mb-50" style="padding: 0px 30px 0px;">
            <div class="comment-section">
                <?php wp_list_comments(array('callback' => 'custom_comment')) ?>
            </div>
        </div>

    <?php endif; ?>

    <?php
    $args = array(
        'fields' => apply_filters('comment_form_default_fields', array(
            'author' => '<div class="row"><div class="col-lg-6 mb-35 col-md-6 col-sm-6"> <input class="from-control" type="text" id="author" name="author" placeholder="' . __('Name', 'cooperate') . '*" required> </div>',
            'email' => '<div class="col-lg-6 mb-35 col-md-6 col-sm-6"> <input class="from-control" type="text" id="email" name="email" placeholder="' . __('E-Mail', 'cooperate') . '*" required> </div></div>'
        )),
        'comment_field' => '<div class="col-lg-12 mb-20"> <textarea class="from-control" id="comment" name="comment" placeholder="' . __('Your message Here', 'cooperate') . '" required></textarea> </div>',
        'title_reply' => __('Leave a comment:', 'cooperate'),
        'submit_button' => '<div class="form-group mt-20"> <input class="readon submit post" type="submit" name="submit" value="' . __('Post Comment', 'cooperate') . '"> </div>',
        'id_form' => 'contact-form',
    );

    ?>
    <?php comment_form($args); ?>
</div>
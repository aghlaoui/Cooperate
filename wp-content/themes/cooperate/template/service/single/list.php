<div class="sec-title mb-45">
    <h2 class="title title11 ser-details">
        <?php echo sanitize_text_field($args['title']) ?>
    </h2>
</div>
<ul class="row rs-features-list2" style="margin-bottom: 30px;">
    <?php foreach ($args['items'] as $item) : ?>
        <?php if (!empty($item['list_item'])) : ?>
            <li class="col-lg-6">
                <i class="fa fa-check-circle"></i>
                <?php echo sanitize_text_field($item['list_item']) ?>
            </li>
        <?php endif ?>
    <?php endforeach; ?>

</ul>
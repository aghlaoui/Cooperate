<div class="sec-title mb-45">
    <h2 class="title title11 ser-details">
        <?php echo sanitize_text_field($args['title']); ?>
    </h2>
</div>
<!-- Faq End -->
<div class="rs-faq faq-style1 faq-modify8">
    <div class="faq-content">
        <div id="accordion" class="accordion">

            <?php $count = 1; ?>
            <?php foreach ($args['questions'] as $question) : ?>
                <?php if (!empty($question['question'] && !empty($question['answer']))) : ?>
                    <div class="card<?php echo ($count == 1) ? ' current' : '' ?>">
                        <div class="card-header">
                            <a class="card-link<?php echo ($count != 1) ? ' collapsed' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count ?>" aria-expanded="<?php echo ($count == 1) ? 'true' : 'false' ?>">
                                <?php echo sanitize_text_field($question['question']); ?>
                            </a>
                        </div>
                        <div id="collapse<?php echo $count ?>" class="collapse<?php echo ($count == 1) ? ' show' : '' ?>" data-bs-parent="#accordion">
                            <div class="card-body">
                                <?php echo sanitize_textarea_field($question['answer']) ?>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                <?php endif ?>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Faq End -->
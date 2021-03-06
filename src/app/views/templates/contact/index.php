<?php $this->load_fragment('skeleton_template/header', ['title' => __('Contact Us')]); ?>
<article class="page contact">
    <div class="container">
        <header>
            <h1>Contact<span class="tabheading"> Us</span></h1>
        </header>
        <p>
            <?= __('There are many ways of contacting us.') ?>
        </p>
        <p>
            <?= sprintf(__('You may email us at %s'), '<a target="_blank" class="underlined" href="mailto:contact@felicity.iiit.ac.in">contact@felicity.iiit.ac.in</a>') ?>
        </p>
        <p>
            <?= __('Or bug our coordinators') ?>
        </p>
        <div class="row text-center">
            <div class="col4">
                <p>
                    <?= __('Arihant Jain') ?>
                    <a target="_blank" href="https://www.facebook.com/arihantjn53">
                        <img class="social-icon" src="<?= base_url() ?>static/images/fb-icon.png">
                    </a>
                </p>
                <p>
                    <a target="_blank" class="underlined" href="mailto:arihant@felicity.iiit.ac.in">arihant@felicity.iiit.ac.in</a>
                </p>
                <p>(+91) 7799270649</p>
            </div>
            <div class="col4">
                <p>
                    <?= __('Nishant Gupta') ?>
                    <a target="_blank" href="https://www.facebook.com/Nishanz">
                        <img class="social-icon" src="<?= base_url() ?>static/images/fb-icon.png">
                    </a>
                </p>
                <p>
                    <a target="_blank" class="underlined" href="mailto:nishant@felicity.iiit.ac.in">nishant@felicity.iiit.ac.in</a>
                </p>
                <p>(+91) 9052678082</p>
            </div>
            <div class="col4">
                <p>
                    <?= __('Sai Sahith Nama') ?>
                    <a target="_blank" href="https://www.facebook.com/namasahith">
                        <img class="social-icon" src="<?= base_url() ?>static/images/fb-icon.png">
                    </a>
                </p>
                <p>
                    <a target="_blank" class="underlined" href="mailto:sahith@felicity.iiit.ac.in">sahith@felicity.iiit.ac.in</a>
                </p>
                <p>(+91) 7013835827</p>
            </div>
        </div>
    </div>
</article>
<?php $this->load_fragment('skeleton_template/footer'); ?>
<?php if (!$is_ajax): ?>
<script>
    (function() {
        $('#toggle').removeClass('i');
        $('.btn-box').css('display', 'none');
    })();
</script>
<?php endif; ?>

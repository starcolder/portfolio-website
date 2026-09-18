<?php get_header(); ?>

<div class="page-content-container container-fluid">
    <div class="window retro-border mb-5">
        <div class="header">
            <div class="row">
                <div class="window-buttons col-sm-1 col-4">
                    <span class="macbtn red"></span>
                    <span class="macbtn yellow"></span>
                    <span class="macbtn green"></span>
                </div>
                <div class="window-title col text-md-center text-end pe-3 pe-sm-5">
                    <h5 class="pe-sm-5">
                        <?php
                        if (have_posts()):
                            the_post();
                            the_title() ?>
                    </h5>
                </div>
            </div>
        </div>
        <div class="page-content container-fluid mt-3 mb-3">
            <?php if (has_post_thumbnail()): ?>
                <?php echo '<div class="row">' ?>
                <?php echo '<div class="col-sm-8">' ?>
            <?php endif; ?>
            <?php the_content(); ?>
            <?php if (has_post_thumbnail()): ?>
                <?php echo '</div>' ?>

                <?php echo '<div class="col-sm-4">' ?>
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="project-image">
                <?php echo '</div>' ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
    </div>
</div>
</div>

<?php get_footer(); ?>
<?php
/*
Template Name: projects
*/
get_header(); ?>

<div class="page-content-container container-fluid justify-content-center align-items-center">
    <?php
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'DESC'
    );
    $projects = new WP_Query($args);

    while ($projects->have_posts()) {
        $projects->the_post();
    ?>
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
                            <?php the_title(); ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="page-content container fs-5 pt-3 pb-3">
                <div class="row">
                    <div class="col-sm-8">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary mt-auto fs-5">read more</a>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="project-image">
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>

<?php get_footer(); ?>
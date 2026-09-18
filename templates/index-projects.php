    <section class="projects-section">
        <div class="window retro-border m-sm-5 m-3">
            <div class="header">
                <div class="row">
                    <div class="window-buttons col-sm-1 col-4">
                        <span class="macbtn red"></span>
                        <span class="macbtn yellow"></span>
                        <span class="macbtn green"></span>
                    </div>
                    <div class="window-title col text-md-center text-end pe-3 pe-sm-5">
                        <h5 class="pe-sm-5">
                            my projects
                        </h5>
                    </div>
                </div>
            </div>
            <div class="projects-content container-fluid mt-3 mb-3">
                <div class="row mt-5 mb-5">
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
                        <div class="col-lg d-flex mb-3">
                            <div class="retro-border">
                                <div class="card h-100 border-0">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="project-image">
                                    <div class="card-body d-flex flex-column">
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                        <p class="card-text fs-5"><?php the_excerpt(); ?></p>
                                        <div class="mt-auto">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary fs-5">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        wp_reset_postdata();
                    }
                    ?>
                </div>
                <div class="skills-in-progress container-fluid mt-3 mb-5">
                    <h3 class="">i'm currently working on:</h3>
                    <div class="skills stack container-fluid mb-3">
                        <span class="tag retro-border me-3">wordpress theme development</span>
                        <span class="tag retro-border me-3">portfolio website</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
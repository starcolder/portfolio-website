    <section class="skills-section">
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
                            my skills
                        </h5>
                    </div>
                </div>
            </div>
            <div class="skills-content container-fluid mt-3 mb-3">
                <h3 class="ps-3">skills stack</h3>
                <div class="stack container-fluid mb-3">
                    <span class="tag retro-border me-3">HTML</span>
                    <span class="tag retro-border me-3">CSS</span>
                    <span class="tag retro-border me-3">Bootstrap</span>
                    <span class="tag retro-border me-3">Python</span>
                    <span class="tag retro-border me-3">JavaScript</span>
                    <span class="tag retro-border me-3">Machine Learning</span>
                    <span class="tag retro-border me-3">WordPress</span>
                </div>
                <div class="row mt-5 mb-5">
                    <?php
                    $args1 = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post_status' => 'publish',
                        'orderby' => 'title',
                        'order' => 'DESC',
                        'tag_id' => 29
                    );
                    $query = new WP_Query($args1);
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="col-lg d-flex pb-3">
                            <div class="retro-border h-100">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column">
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                        <p class="card-text fs-5"><?php the_excerpt(); ?></p>
                                        <div class="mt-auto">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary fs-5">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="skills-in-progress container-fluid mt-3 mb-5">
                    <h3>i'm currently in progress of learning:</h3>
                    <div class="skills stack container-fluid mb-3">
                        <span class="tag retro-border me-3">PHP</span>
                        <span class="tag retro-border me-3">backend</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
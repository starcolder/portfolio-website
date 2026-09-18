<?php

/***TEMPLATE NAME : page */
get_header(); ?>
<div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="dialog-window window retro-border">
        <section class="header">
            <div class="window-buttons gap-1">
                <span class="macbtn red"></span>
                <span class="macbtn yellow"></span>
                <span class="macbtn green"></span>
            </div>
            <h5 class="window-title text-md-center text-end pe-3 pe-md-0">
                error
            </h5>
        </section>
        <div class="window-content container text-center p-5 fs-5">
            <p>the page you requested was not found :(</p>
            <a href="<?php echo get_home_url(); ?>">back to home page</a>
        </div>
    </div>
</div>

<?php
get_footer(); ?>
    <?php
    /*
Template Name: contact
*/
    get_header(); ?>
    <div class="contact-section page-content-container container-fluid fs-5">
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
                            contact me
                        </h5>
                    </div>
                </div>
            </div>
            <div class="contact-form contact-main-page p-3">
                <?php echo do_shortcode('[contact-form-7 id="86088c3" title="portfolio-contact"]'); ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
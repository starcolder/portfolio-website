<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <title>nia's portfolio</title>
    <?php wp_head(); ?>
    <?php if (!is_front_page()): ?>
        <div class="main-window window retro-border m-3 mt-0 mb-5">
            <!-- navbar section -->
            <?php get_template_part('templates/index', 'navbar') ?>
        </div>
    <?php endif; ?>
</head>
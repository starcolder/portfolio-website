<?php get_header(); ?>

<body>
  <div class="main-window window retro-border m-sm-5 m-3 mt-0">
    <!-- header section -->
    <section class="header">
      <div class="row">
        <div class="window-buttons col-sm-1 col-4">
          <span class="macbtn red"></span>
          <span class="macbtn yellow"></span>
          <span class="macbtn green"></span>
        </div>
        <div class="window-title col text-md-center text-end pe-3 pe-sm-5">
          <h5 class="pe-sm-5">
            nia's portfolio
          </h5>
        </div>
      </div>
    </section>



    <!-- navbar section -->
    <?php get_template_part('templates/index', 'navbar') ?>

    <!-- hero section -->
    <?php get_template_part('templates/index', 'hero') ?>

    <!-- skills section -->
    <?php get_template_part('templates/index', 'skills') ?>

    <!-- projects section -->
    <?php get_template_part('templates/index', 'projects') ?>


    <!-- contact section -->
    <?php get_template_part('templates/index', 'contact') ?>

  </div>
</body>

<?php get_footer(); ?>
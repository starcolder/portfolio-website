    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/navimage.png"
                type="image/png"
                class="navbar-brand-image me-3"
                alt="logo" />
            <a class="navbar-brand me-auto fs-3" href="<?php echo get_home_url(); ?>"> nia's portfolio </a>

            <!-- Mobile toggle -->
            <button
                class="menu-bars navbar-toggler border-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="black"
                    viewBox="0 0 24 24"
                    width="50"
                    height="50">
                    <path d="M20 22H4v-2h16v2ZM4 20H2V4h2v16Zm18 0h-2V4h2v16Zm-5-3H7v-2h10v2Zm0-4H7v-2h10v2Zm0-4H7V7h10v2Zm3-5H4V2h16v2Z" />
                </svg>

            </button>

            <?php
            wp_nav_menu(array(
                "theme_location" => "main_menu",
                "menu_class" => "navbar-nav ms-auto my-menu fs-3 gap-md-5",
                "container" => "div",
                "container_class" => "collapse navbar-collapse",
                "container_id" => "mainNavbar",
            ));

            ?>
        </div>
    </nav>
<nav class="bits-navigation" data-topbar role="navigation">
    <div class="row">
        <div class="columns small-6 medium-4 large-3">
            <div class="logo-container">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="/wp-content/themes/bits_bcn/images/bits-logo-reversal.svg"/>
                </a>
            </div>
        </div>
        <div class="columns small-6 medium-8 large-9">
            <div class="hide-for-large" data-toggle="bits-menu">
                <img class="hamburger" src="/wp-content/themes/bits_bcn/images/menu-button.svg" data-toggle>
            </div>
        </div>
    </div>
</nav>

<nav class="bits-navigation full reveal" id="bits-menu" data-reveal>
    <div class="row">
        <div class="columns small-6 medium-4 large-3">
            <div class="logo-container">
                <img src="/wp-content/themes/bits_bcn/images/bits-logo-reversal.svg"/>
            </div>
        </div>
        <div class="columns small-6 medium-8 large-9">
            <div data-toggle="bits-menu">
                <img class="hamburger" src="/wp-content/themes/bits_bcn/images/cross.svg" data-toggle>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="bits-mobile-menu">
            <?php wp_nav_menu(array('menu_class' => 'menu-items')); ?>
        </div>
    </div>
</nav>

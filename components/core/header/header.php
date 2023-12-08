<div class="site-header-top d-none">
    <div class="site-header-top-wrap">
        <div class="site-header-top-customer-service">
            <span class="site-header-top-customer-service-txt">Top Bar </span>
        </div>
        <div class="site-header-top-nav">
            <?php secondary_menu(); ?>
        </div>
    </div>
</div>
<header class="site-header">
    <div class="site-header-wrap">
        <div class="site-header-branding">
            <a class="site-header-branding-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img class="site-header-branding-logo" src="<?php theme_url(); ?>/assets/images/logo.svg" alt="Logo">
            </a>
        </div>
        <?php toggle() ?>
    </div>
</header>

<?php menu_slide()?>
<?php desktop_menu()?>
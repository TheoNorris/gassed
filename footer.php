<footer>
    <div class="footer-container">
        <div class="footer-menu-container">
            <div class="logo-div">
            <a href="/">
            
            <img class="logo" src="<?=get_template_directory_uri() . '/assets/images/gassed-dark.png';?>" alt="logo">
            </a>
            <h5>COME MEET US ON OUR SOCIALS</h5>
            <div class="social-div">
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
        
            </div>
            </div>
            <div class="product-div">

            <h4>Products</h4>
                <?php
                $menu = array(
                    'theme_location' => 'products',
                    'menu_id' => 'product-menu',
                    'container' => 'div',
                    'container-class' => 'product-div'
                );

                wp_nav_menu($menu);
                ?>
            </div>
            <div class="company-div">
                <h4>Company</h4>
            <?php
                $menu = array(
                    'theme_location' => 'company',
                    'menu_id' => 'company-menu',
                    'container' => 'div',
                    'container-class' => 'company-div'
                );

                wp_nav_menu($menu);
                ?>
            </div>
            
            <div class="profile-div">
                <h4>Profile</h4>
            <?php
                $menu = array(
                    'theme_location' => 'profile',
                    'menu_id' => 'profile-menu',
                    'container' => 'div',
                    'container-class' => 'profile-div'
                );

                wp_nav_menu($menu);
                ?>
            </div>
        </div>
        <div class="copyright">© <?= do_shortcode('[year]'); ?> <h2>GASSED.SE</h2></div>
    </div>
</footer>

</body>
</html>